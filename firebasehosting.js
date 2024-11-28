<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyA-umzc2ZFX8ZQbdFukaJsM_rJF0PvpOAM",
    authDomain: "tania-9317f.firebaseapp.com",
    projectId: "tania-9317f",
    storageBucket: "tania-9317f.firebasestorage.app",
    messagingSenderId: "704045909136",
    appId: "1:704045909136:web:a24c94ca01ad49a555c415",
    measurementId: "G-KYCTN45N67"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>