<?php

/**
 * Vérifie et fix la faille XSS.
 * 
 * @param string $value
 * @return string
 */
function checkXss($value)
{
    return trim(strip_tags($value));
}

/**
 * Vérifie la longueur d'une chaine de caractères.
 * 
 * @param array<string> $errors
 * @param string $data
 * @param string $key
 * @param int $min
 * @param int $max
 * @return array<string>
 */
function checkField($errors, $data, $key, $min, $max)
{
    if (!empty($data)) {
        if (mb_strlen($data) < $min) {
            $errors[$key] = 'Min ' . $min . ' caractères';
        } elseif (mb_strlen($data) > $max) {
            $errors[$key] = 'Max ' . $max . ' caractères';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}

/**
 * Vérifie qu'une chaine de caractères est bien une adresse mail.
 * 
 * @param array<string> $errors
 * @param string $data
 * @param string $key
 * @return array<string>
 */
function checkEmail($errors, $data, $key)
{
    if (!filter_var($data, FILTER_VALIDATE_EMAIL)) $errors[$key] = 'Cette adresse mail est invalide';
    return $errors;
}
