# LARAVEL-MIGRATION-SEEDS


## PRIMA PARTE

Creare una tabella trains e relativa MigrationOgni treno dovrà avere:

1. Azienda
2. Stazione di partenza
3. Stazione di arrivo
4. Orario di partenza
5. Orario di arrivo
6. Codice Treno
7. Numero Carrozze
8. In orario
9. Cancellato

Oltre alla migration di creazione della tabella aggiungere una migration di update con rollback funzionante


Continuare sulla repo laravel-migration-seeder popolando la tabella con il seeder.

## SECONDA PARTE 

Realizzare quindi un seeder con il Faker per l’inserimento di quanti treni si desidera .

Stampate poi in una view l’elenco dei treni

BONUS:

1. Paginare i risultati

2. Creare un nuovo seeder che inserisca nel db i dati presenti nel file csv in allegato.




$table->string('slug',50)->after('cancellato');

 $table->dropColumn('slug');
