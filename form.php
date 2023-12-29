<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulaire</title>
</head>
<body>
    <form action="thanks.php" method="post">
        <!--nom-->
        <label for="nom">Nom :</label>
        <input required  type="text" name="name" id="nom">
        <!--prenom-->
        <label for="prenom">Prénom :</label>
        <input required type="text" name="prenom" id="prenom">
        <!--email-->
        <label for="email">Email :</label>
        <input required type="email" name="mail" id="email">
        <!--phone-->
        <label for="phone">Téléphone :</label>
        <input required type="tel" name="phone" id="phone">
        <!--sujet-->
        <label for="sujet">Sujet :</label>
        <select required name="sujet" id="sujet">
            <option value="sujet1">Sujet 1</option>
            <option value="sujet2">Sujet 2</option>
            <option value="sujet3">Sujet 3</option>
            <option value="sujet4">Sujet 4</option>
        </select>
        <!--message-->
        <label for="message">Message</label>
        <textarea required name="message" id="message" cols="30" rows="10">

        </textarea>
        <button type="submit">Envoyer</button>
        </form>
</body>
</html>
