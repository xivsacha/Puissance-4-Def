UPDATE `score` SET `game_score`='2049' --sample à remplacer par le nouveau score
WHERE score.player_ID=1 --sample à remplacer par l'id du joueur
AND score.game_difficulty=1 --sample à remplacer par la difficulté du jeu
AND score.game_ID=score.game_ID --sample à remplacer par l'id du jeu (power of memory)
AND score.game_score = 2048; --sample à remplacer par le nouveau score