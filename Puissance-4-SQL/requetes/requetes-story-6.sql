SELECT game.game_name, user.pseudo, score.game_difficulty, score.game_score
FROM score, user, game WHERE user.player_ID=score.player_ID
AND game.game_ID=score.game_ID
--ORDER BY game.game_name ASC
--ORDER BY score.game_difficulty ASC
--ORDER BY score.game_score ASC;