// Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyA6C2MY6IZZcrzrIO3yO-y7Q39vmCZoTUQ",
  authDomain: "tester-57020.firebaseapp.com",
  databaseURL: "https://tester-57020-default-rtdb.firebaseio.com",
  projectId: "tester-57020",
  storageBucket: "tester-57020.appspot.com",
  messagingSenderId: "1057263461206",
  appId: "1:1057263461206:web:253d5bd4d016d9220c2cf7",
  measurementId: "G-BXJYKG1CFN",
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
