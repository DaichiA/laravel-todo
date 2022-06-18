const delBtn = document.getElementsByClassName('del-btn');
for (let i = 0; i < delBtn.length; i++) {
  delBtn[i].addEventListener('click', function () {
    confirm('削除してもよろしいですか？')
  });
}

document.getElementById("notice-check").addEventListener('change', function() {
  if (this.checked) {
    this.value = 1;
  } else {
    this.value = 0;
  }
});
// for (let i = 0; i < checkBox.length; i++) {
//   checkBox[i].addEventListener('change', function() {
//     console.log(this);
//   });
// }
// checkBox.addEventListener('click', function() {
//   console.log('hello');
// })

