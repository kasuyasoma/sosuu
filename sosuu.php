<?php

sosuu();

function sosuu()
{
  for ($i = 1; $i <= 100; $i++)
  {
    if ($i <= 1)
    {
      continue;
    }
    if ($i == 2)
    {
      echo $i . "<br>";
      continue;
    }
    if ($i % 2 == 0)
    {
      continue;
    }
    $divisible = "0";
    for ($j = 3; $j < $i; $j++)
    {
      if ($i % $j == 0)
      {
      $divisible = "1";
      break;
      }
    }
    if ($divisible == "0")
    {
      echo $i . "<br>";
    }
  }
}

?>