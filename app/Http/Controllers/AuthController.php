<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // Reindirizza l'utente a GitHub per l'autenticazione
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    // Gestisce il callback da GitHub e il login
    public function handleGithubCallback()
    {
        try {
            // Ottieni l'utente da GitHub
            $githubUser = Socialite::driver('github')->user();
        } catch (\Exception $e) {
            // Gestisci eventuali errori
            return redirect('/login')->with('error', 'Errore durante l\'autenticazione con GitHub.');
        }

        // Cerca l'utente nel database usando l'email o il github_id
        $user = User::updateOrCreate(
            ['github_id' => $githubUser->id], // Cerca per github_id prima
            [
                'name' => $githubUser->name ?? $githubUser->nickname,
                'email' => $githubUser->email,
                'github_token' => $githubUser->token,
                'github_refresh_token' => $githubUser->refreshToken ?? null,
                'password' => bcrypt(uniqid()),  // Genera una password casuale
            ]
        );

        // Se l'utente non ha github_id, cerca per email
        if (!$user->github_id) {
            $user = User::updateOrCreate(
                ['email' => $githubUser->email],  // Cerca per email se github_id non è presente
                [
                    'name' => $githubUser->name ?? $githubUser->nickname,
                    'github_id' => $githubUser->id,
                    'github_token' => $githubUser->token,
                    'github_refresh_token' => $githubUser->refreshToken ?? null,
                    'password' => bcrypt(uniqid()),  // Genera una password casuale
                ]
            );
        }

        // Effettua il login dell'utente
        Auth::login($user);

        // Reindirizza l'utente alla home page o a una pagina di benvenuto
        return redirect('/')->with('success', 'Login con GitHub effettuato con successo!');
    }

    // Funzione per il logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


}
