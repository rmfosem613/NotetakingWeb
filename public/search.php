<?php
	$year=$_POST['year']
	$month=$_POST['month']
	$day=$_POST['day']
	$subject=$_POST['subj']
?>


 <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
 <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-auth.js"></script>
 <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-firestore.js"></script>

<script>
	 var firebaseConfig = {
    apiKey: "AIzaSyC4jN6MCZ-GN6RXg6rtNwGmNEDhBCVpvXQ",
    authDomain: "writing-web-e3771.firebaseapp.com",
    databaseURL: "https://writing-web-e3771.firebaseio.com",
    projectId: "writing-web-e3771"
    storageBucket: "writing-web-e3771.appspot.com",
    messagingSenderId: "184184590919",
    appId: "1:184184590919:web:8466f91bd0b1944844d762"
  };
  firebase.initializeApp(firebaseConfig);

  // make auth and firestore references
  const auth = firebase.auth();
  const db = firebase.firestore();

db.collection("Writing/data").where('<?=year?>', '<?=month?>', '<?=day?>', '<?=subject?>')
.get()
.then(function(querySnapshot){
	querySnapshot.forEach(function(doc))
})

</script>
