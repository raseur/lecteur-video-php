<style>
  .video-container {
    width: 50%;
    float: left;
  }
	
video::-webkit-media-controls-play-button,
video::-webkit-media-controls-mute-button,
video::-webkit-media-controls-fullscreen-button {
  background-color: green; /* couleur de fond des boutons */
  color: white; /* couleur du texte/icône des boutons */
}

video::-webkit-media-controls-timeline {
  background: linear-gradient(to right, blue, green); /* couleur de fond de la barre de progression */
}

video::-webkit-media-controls-timeline-container {
  color: white; /* couleur du texte indiquant le temps écoulé/restant */
}
video {
  border: 5px solid black; /* ajoute une bordure rouge de 5 pixels de large */
}
video {
  transition: all 0.5s; /* temps de transition de 0.5 seconde pour toutes les propriétés */
}

video:hover {
  transform: scale(1.01); /* agrandit légèrement la vidéo au survol */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* ajoute une ombre autour de la vidéo */
}

</style>

<div class="video-container">
  <video width="200%" height="75%" controls>
    <source src="video.mp4" type="video/mp4">
    Votre navigateur ne supporte pas ce format de vidéo.
  </video>
</div>

<div class="video-container">
  <!-- autre contenu de votre site web -->
</div>
