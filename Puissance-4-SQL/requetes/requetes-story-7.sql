SELECT game.game_name, user.pseudo, score.game_difficulty, score.game_score
FROM score, user, game
--WHERE game.game_name = 'The Power of Memory'
--WHERE user.player_ID=score.player_ID
--WHERE score.game_difficulty = (1 ou 2 ou 3 ou 4, au choix)
AND game.game_name='The Power of Memory' AND game.game_ID=score.game_ID
--ORDER BY game.game_name ASC
--ORDER BY score.game_difficulty ASC
--ORDER BY score.game_score ASC;

-- Les tirets mettent en place des parenthèses. Vous pouvez utiliser n'importe quelle commande après des tirets tant qu'elles ne sont pas utilisées en même temps.