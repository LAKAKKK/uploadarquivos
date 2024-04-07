<?php
if ($_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    $destination = $uploadDir . $_FILES['pdf']['name'];

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    move_uploaded_file($_FILES['pdf']['tmp_name'], $destination);

    echo '<h2>PDF Enviado:</h2>';
    echo '<a href="' . $destination . '" target="_blank">Visualizar PDF</a>';
} else {
    echo 'Erro ao enviar o PDF.';
}
?>
