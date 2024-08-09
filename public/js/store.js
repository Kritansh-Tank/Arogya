// Firebase configuration
const firebaseConfig = {
    apiKey: "your-api-key",
    authDomain: "your-project-id.firebaseapp.com",
    databaseURL: "your-database-url",
    projectId: "your-project-id",
    storageBucket: "your-project-id.appspot.com",
    messagingSenderId: "your-sender-id",
    appId: "your-app-id",
    measurementId: "your-measurement-id"
};

// Initialize Firebase
const app = firebase.initializeApp(firebaseConfig);
const database = firebase.database(app);

async function login(e) {
  e.preventDefault();

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  try {
    const [patients, doctors, laboratories] = await Promise.all([
      firebase.database().ref("patients").once("value"),
      firebase.database().ref("doctors").once("value"),
      firebase.database().ref("laboratories").once("value"),
    ]);

    const patientsData = patients.val();
    const doctorsData = doctors.val();
    const laboratoriesData = laboratories.val();

    if (matchUser(patientsData, username, password)) {
        window.location.href = window.homeUrl;
    } else if (matchUser(doctorsData, username, password)) {
        window.location.href = window.homeUrl;
    } else if (matchUser(laboratoriesData, username, password)) {
        window.location.href = window.homeUrl;
    } else {
      alert("Invalid username or password.");
    }
  } catch (error) {
    console.error("Error fetching data: ", error);
  }
}

function matchUser(data, username, password) {
  for (let key in data) {
    if (data[key].username === username && data[key].password === password) {
      return true;
    }
  }
  return false;
}
