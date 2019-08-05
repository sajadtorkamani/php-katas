<?php

function killMonsters(int $health, int $numMonsters, int $monsterHitDamage): string {
  $numHits = 0;

  while (true) {
    $numMonsters -= 3;

    if ($numMonsters > 0) {
      $numHits += 1;
      $health -= $monsterHitDamage;
    }

    if ($numMonsters <= 0) {
      $totalDamage = $numHits * $monsterHitDamage;
      return "hits: {$numHits}, damage: {$totalDamage}, health: {$health}";
    }

    if ($health <= 0) {
      return 'hero died';
    }
  }
}
