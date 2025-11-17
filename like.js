const likeBtns = document.querySelectorAll(".likeBtn");

likeBtns.forEach((likeBtn) => {
  likeBtn.addEventListener("click", likeFunction);
});

function likeFunction(event) {
  const btnLike = event.target.parentElement;
  btnLike.disabled = true;

  const postId = btnLike.dataset.postId;

  fetch("./process/like.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ postId: postId }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.succes) {
        const nombreLike = btnLike.nextSibling.nextSibling;
        
        if (data.existingLike) {
          nombreLike.innerText = parseInt(nombreLike.innerText) - 1;
          event.target.src="./images/icone/not-like.png";
          
        } else {
          nombreLike.innerText = parseInt(nombreLike.innerText) + 1;
          event.target.src="./images/icone/like.png";
        }
      }
    })
    .catch((error) => {
      console.error("Erreur:", error);
      alert("Une erreur est survenue lors de l'opération");
    })
    .finally(() => {
      // Réactiver le bouton
      btnLike.disabled = false;
    });
}
