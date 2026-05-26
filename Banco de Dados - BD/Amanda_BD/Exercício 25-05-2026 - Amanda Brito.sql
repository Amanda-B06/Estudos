CREATE TABLE "Pedido_Item"(
"Cod_Unico" INTEGER UNIQUE,
"N_Controle" INTEGER UNIQUE,
FOREIGN KEY ("Cod_Unico") REFERENCES Pedido("Cod_Unico"), 
FOREIGN KEY ("N_Controle") REFERENCES "Item"("N_Controle"),
PRIMARY KEY ("Cod_Unico", "N_Controle") 
);