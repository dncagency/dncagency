import { initializeApp } from "firebase/app";
import { getDatabase, ref, push, onValue } from "firebase/database";

// Konfigurasi Firebase
const firebaseConfig = {
  databaseURL: "https://undangan-digital-c5267-default-rtdb.firebaseio.com/"
};

// Inisialisasi Firebase Realtime Database
const app = initializeApp(firebaseConfig);
const db = getDatabase(app);

// Menyimpan komentar ke database saat formulir dikirim
const form = document.getElementById('commentForm');
form.addEventListener('submit', (e) => {
  e.preventDefault();
  const name = document.getElementById('name').value;
  const message = document.getElementById('message').value;
  const attendance = document.getElementById('attendance').value;

  if (name && message) {
    const newCommentRef = push(ref(db, 'comments'));
    newCommentRef.set({
      name: name,
      message: message,
      attendance: attendance,
      timestamp: new Date().toISOString()
    }).then(() => {
      console.log('Komentar berhasil disimpan');
      form.reset();
    }).catch((error) => {
      console.error('Error saat menyimpan komentar:', error);
    });
  } else {
    alert('Mohon isi semua kolom.');
  }
});

// Mendengarkan perubahan pada database dan menampilkan komentar
const commentsRef = ref(db, 'comments');
const commentsContainer = document.getElementById('comments');
onValue(commentsRef, (snapshot) => {
  commentsContainer.innerHTML = '';
  snapshot.forEach((childSnapshot) => {
    const childData = childSnapshot.val();
    const commentItem = document.createElement('div');
    commentItem.innerHTML = `<strong>${childData.name}</strong>: ${childData.message}`;
    commentsContainer.appendChild(commentItem);
  });
});