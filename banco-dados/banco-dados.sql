

# É recomendado que a a estrutura e os dados de exemplos estajam nessa pasta
DROP TABLE IF EXISTS medicos

CREATE TABLE IF NOT EXISTS medicos (
    id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(15) NOT NULL,
    nome VARCHAR(20) NOT NULL,
    senha VARCHAR(10) NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    data_alteracao timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS Horario (
    id INT NOT NULL AUTO_INCREMENT,
    id_medico INT UNSIGNED NOT NULL,
    data_horario DATETIME,
    horario_agendado TINYINT(1),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
    data_alteracao timestamp DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (id_medico) REFERENCES medicos(id) ON DELETE CASCADE
);