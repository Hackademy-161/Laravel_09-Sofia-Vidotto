<x-layout title="Skin Quiz - Bloom Beauty">
    <div class="bg-register min-vh-100">
        <div class="container pt-5">

           <x-quiz />

            <!-- Personal Information Form -->
            <div class="quiz-section p-5 shadow" id="personalInfoForm" style="display:none;">
                <h3>Enter Your Details</h3>
                <form id="personalInfo">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small">Your Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small">Your Gender</label>
                        <select class="form-control" name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small">Your Age</label>
                        <input type="number" class="form-control" name="age" required>
                    </div>

                    <button type="button" class="btn btn-dark" id="nextButton">Next</button>
                </form>
            </div>

            <!-- Skin Quiz Form -->
            <div id="skinQuizForm" style="display:none;" class="quiz-section p-5 shadow">
                <h3>Answer the following questions about your skin</h3>
                <form id="quizForm">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small">How would you describe the texture of your skin?</label>
                        <select class="form-control" name="q1">
                            <option value="Rough">Rough</option>
                            <option value="Smooth">Smooth</option>
                            <option value="Oily">Oily</option>
                            <option value="Variable">Variable</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small">What is the size of the pores on your face?</label>
                        <select class="form-control" name="q2">
                            <option value="Invisible">Invisible</option>
                            <option value="Small">Small</option>
                            <option value="Large">Large</option>
                            <option value="Variable">Variable</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small">Does your skin tend to get oily during the day?</label>
                        <select class="form-control" name="q3">
                            <option value="Never">Never</option>
                            <option value="Rarely">Rarely</option>
                            <option value="Frequently">Frequently</option>
                            <option value="Only in the T-zone">Only in the T-zone</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small">Do you suffer from redness or skin irritations?</label>
                        <select class="form-control" name="q4">
                            <option value="Never">Never</option>
                            <option value="Occasionally">Occasionally</option>
                            <option value="Often">Often</option>
                            <option value="Always">Always</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small">How does your skin behave after applying skincare products?</label>
                        <select class="form-control" name="q5">
                            <option value="Absorbs quickly">Absorbs quickly</option>
                            <option value="Remains oily">Remains oily</option>
                            <option value="Irritates easily">Irritates easily</option>
                            <option value="Absorbs variably">Absorbs variably</option>
                        </select>
                    </div>

                    <button type="button" class="btn btn-dark" id="submitButton">Submit</button>
                </form>
            </div>
        </div>

        <!-- Container to hold all result cards -->
        <div id="resultContainer" class="container mt-4">
            <!-- All result cards will be appended here -->
        </div>
    </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const startButton = document.getElementById('startButton');
            const nextButton = document.getElementById('nextButton');
            const submitButton = document.getElementById('submitButton');

            if (startButton) {
                startButton.addEventListener("click", function () {
                    document.getElementById('startButton').style.display = 'none';
                    document.getElementById('personalInfoForm').style.display = 'block';
                    document.getElementById('quizForm').reset(); // Reset quiz form fields
                });
            }

            if (nextButton) {
                nextButton.addEventListener("click", function () {
                    document.getElementById('personalInfoForm').style.display = 'none';
                    document.getElementById('skinQuizForm').style.display = 'block';
                });
            }

            if (submitButton) {
                submitButton.addEventListener("click", function () {
                    let form = document.getElementById('quizForm');
                    let formData = new FormData(form);

                    let skinType = analyzeSkinType(formData);

                    // Generate a new result card
                    let resultCard = createResultCard(skinType);

                    // Append the result card to the result container
                    document.getElementById('resultContainer').appendChild(resultCard);

                    // Re-display the start button after quiz submission
                    document.getElementById('startButton').style.display = 'block';

                    // Hide quiz form after submission
                    document.getElementById('skinQuizForm').style.display = 'none';
                });
            }
        });

        function analyzeSkinType(formData) {
            let answers = Array.from(formData.values());

            if (answers.includes("Oily") || answers.includes("Large") || answers.includes("Frequently")) return "Oily Skin";
            if (answers.includes("Rough") || answers.includes("Absorbs quickly") || answers.includes("Never")) return "Dry Skin";
            if (answers.includes("Variable") || answers.includes("Only in the T-zone")) return "Combination Skin";
            if (answers.includes("Irritates easily") || answers.includes("Often") || answers.includes("Always")) return "Sensitive Skin";
            return "Normal Skin";
        }

        function createResultCard(skinType) {
            let container = document.getElementById('resultContainer');
            if (!container) {
                container = document.createElement('div');
                container.id = 'resultContainer';
                container.classList.add('container', 'mt-4');
                document.body.appendChild(container);
            }

            let row = container.querySelector('.row');
            if (!row) {
                row = document.createElement('div');
                row.classList.add('row', 'justify-content-center');
                container.appendChild(row);
            }

            let card = document.createElement('div');
            card.classList.add('col-md-3', 'mb-3');

            let cardBody = document.createElement('div');
            cardBody.classList.add('card', 'quiz-section', 'p-5', 'shadow'); 

            let cardTitle = document.createElement('h2');
            cardTitle.classList.add('card-title');
            cardTitle.innerText = "♡ " + skinType;

            let cardText = document.createElement('p');
            cardText.classList.add('card-text');
            cardText.innerText = "Your skin type is: " + skinType;

            cardBody.appendChild(cardTitle);
            cardBody.appendChild(cardText);
            card.appendChild(cardBody);
            row.appendChild(card);
        }
    </script>
</x-layout>
