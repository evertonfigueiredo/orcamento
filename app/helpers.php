<?php
function convertCurrencyToFloat($value)
{
    // Remova os pontos de milhar e substitua a vírgula decimal por ponto
    $cleanedValue = str_replace(['.', ','], ['', '.'], $value);

    // Converte a string para um número de ponto flutuante
    $floatValue = (float) $cleanedValue;

    return $floatValue;
}
