CREATE TABLE Cars(
    Id INT PRIMARY KEY AUTO INCREMENT,
    Producer VARCHAR(20),
    Type VARCHAR(20),
    Vintage INT,
    Fuel VARCHAR(10)
);
INSERT INTO CARS (producer, type, vintage, fuel) VALUES
('suzuki', 'swift', '2004', 'dízel'),
('opel', 'corsa', '2005', 'benzin'),
('suzuki', 'vitara', '2017', 'benzin'),
('Chevrolet', 'Camaro', '2011', 'benzin');