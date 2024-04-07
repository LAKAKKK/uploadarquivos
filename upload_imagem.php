<?php
if ($_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    $destination = $uploadDir . $_FILES['imagem']['name'];

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    move_uploaded_file($_FILES['imagem']['tmp_name'], $destination);

    echo '<h2>Imagem Enviada:</h2>';
    echo '<img src="' . $destination . '" alt="Imagem Enviada">';
} else {
    echo 'Erro ao enviar a imagem.';
}
?>
