function pregunta(id, imagen) {
  if (confirm('¿Estás seguro de borrar el registro?')) {
    const url = 'main.php?da=4&lla=${id}&imagen=${encodeURIComponent(imagen)}`;
    window.location.href = url;
  } else {
    window.location.href = "main.php?da=2";
  }
}
