
// Votre code JavaScript pour récupérer et afficher les questions du quiz
let currentQuestionIndex = 0; // Pour garder une trace de la question actuelle
let userScore = 0; // Initialisation du score de l'utilisateur
let currentQuestions = []; // Variable pour stocker les questions


function fetchTriviaData() {
  fetch('https://opentdb.com/api.php?amount=5&category=28&difficulty=medium&type=multiple')
    .then(response => response.json())
    .then(data => {
      currentQuestions = data.results; // Stocker les questions récupérées
      displayTriviaQuestions(currentQuestions);
    })
    .catch(error => {
      console.error('Erreur lors de la récupération des données de trivia :', error);
    });
}

function displayTriviaQuestions(questions) {
  const quizContainer = document.getElementById('quizContainer');
  quizContainer.innerHTML = ''; // Efface le contenu précédent s'il y en a

  questions.forEach(questionData => {
    const questionElement = document.createElement('div');
    questionElement.classList.add('question');
    questionElement.innerHTML = `
      <p><strong>Question:</strong> ${questionData.question}</p>
      <form class="answers-form">
        ${questionData.incorrect_answers.map(answer => `
          <label>
            <input type="radio" name="answer" value="${answer}">
            ${answer}
          </label><br>
        `).join('')}
        <label>
          <input type="radio" name="answer" value="${questionData.correct_answer}">
          ${questionData.correct_answer}
        </label>
        <br>
        <button onclick="checkAnswer('${questionData.correct_answer}')">Submit</button>
      </form>
    `;
    quizContainer.appendChild(questionElement);
  });
}

function checkAnswer(correctAnswer) {
  const selectedAnswer = document.querySelector('input[name="answer"]:checked');
  if (!selectedAnswer) {
    alert('Please select an answer.');
    return;
  }

  const userAnswer = selectedAnswer.value;
  if (userAnswer === correctAnswer) {
    alert('Correct answer!');
    userScore++; // Incrémenter le score si la réponse est correcte
  } else {
    alert(`Incorrect. The correct answer is: ${correctAnswer}`);
  }

  currentQuestionIndex++; // Passer à la question suivante

  if (currentQuestionIndex < currentQuestions.length) {
    // S'il reste des questions, afficher la suivante
    displayTriviaQuestions(currentQuestions.slice(currentQuestionIndex));
  } else {
    // Sinon, afficher le score final
    alert(`Quiz ended! Your score is: ${userScore}/${currentQuestions.length}`);
    // Réinitialiser les variables pour recommencer le quiz si nécessaire
    // currentQuestionIndex = 0;
    // userScore = 0;
  }
}


// Appeler fetchTriviaData() lorsque la page se charge
fetchTriviaData();
