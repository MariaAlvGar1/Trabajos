CREATE TABlE usuarios(
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    password VARCHAR(255)
);

CREATE TABlE songs(
    song_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    artist VARCHAR (255),
    price DECIMAL(10,2)
);


CREATE TABlE user_songs(
    user_song_id INT AUTO_INCREMENT PRIMARY KEY, 
    user_id INT,
    song_id INT,
    FOREIGN KEY (user_id) REFERENCES usuarios(user_id),
    FOREIGN KEY (song_id) REFERENCES songs(song_id)

);



CREATE TABlE user_cart(
    cart_id INT AUTO_INCREMENT PRIMARY KEY, 
     user_id INT,
    song_id INT,
      FOREIGN KEY (user_id) REFERENCES usuarios(user_id),
    FOREIGN KEY (song_id) REFERENCES songs(song_id)
);

INSERT INTO songs (title, artist, price) VALUES ('Vivir', 'Rozalén', 1.99),
('Malamente','Rosalía',2.49), ('Contando Lunares','Don Patricio', 1.79),('La Modelo', 'Ozuna ft Cardi B',2.99), ('Baila Baila Baila', 'Ozuna', 0.99), ('Quédate', 'Aitana', 3.29), ('Perdona(Ahora Sí Que Sí)', 'Beret', 1.49), ('Con Altura', 'Rosalía ft J Balvin', 2.19),('La cobra', 'Alba Reche', 0.89), ('Me Gusta', 'Natti Natasha ft Daddy Yankee', 2.99);

INSERT INTO user_songs (user_id, song_id) VALUES (1,6),(1,7),(1,8),(1,9),(1,10);