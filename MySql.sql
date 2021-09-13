CREATE DATABASE PROYECTO;
USE PROYECTO;

create table producto(
codigo int (15) auto_increment,
Nombre varchar (25),
Descripcion varchar (1000),
Stock int (100),
Precio int (100),
primary key (codigo));

Create table Usuario(
CI int (15),
Email varchar (30) UNIQUE,
contra varchar (40),
primary key (CI));

Create table Telefono(
CI int (15),
NumTel int (15),
primary key (NumTel),
foreign key (CI) references Usuario (CI)
);

Create table Admin(
CI int (15),
idAdmin int (15),
primary key (idAdmin),
foreign key (CI) references Usuario (CI)
);

Create table Cliente(
CI int (15),
foreign key (CI) references Usuario (CI)
);

Create table Vendedor(
CI int (15),
idVendedor int (15),
primary key (idVendedor),
foreign key (CI) references Usuario (CI)
);

Create table Factura(
CodigoFac int (15),
idVendedor int (15),
SolicitudEntrega varchar (40),
Hora int (10),
Fecha int (10),
primary key (CodigoFac),
Foreign key (idVendedor) references Vendedor (idVendedor)
);

Create table compra(
codigo int (15),
CI int (15),
foreign key (CI) references Usuario (CI),
foreign key (codigo) references producto (codigo));

create table vende(
idVendedor int (15),
CodigoFac int (15),
Foreign key (idVendedor) references Vendedor (idVendedor),
Foreign key (CodigoFac) references Factura (CodigoFac)
);

create table supervisa(
idVendedor int (15),
CI int (15),
idAdmin int (15),
Foreign key (idVendedor) references Vendedor (idVendedor),
foreign key (CI) references Usuario (CI),
foreign key (idAdmin) references Admin (idAdmin)
);
