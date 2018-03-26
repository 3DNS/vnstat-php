# vnStat-PHP

Dies ist ein PHP Frontend um eure Netzwerkstatistik auf einen Blick zu haben. 
Die Angaben erfolgen in Stunden / Tage / Monate, dazu gibt es jeweils eine schöne tabellarische Übersicht & für die letzten 24 Stunden ein Diagramm.

## Konfigurieren

1. config.php bearbeiten mit euren Interfaces z.B. eth0
2. apt-get install vnstat installieren
3. vnstat -u -i INTERFACE z.B. eth0 (Datenbank anlegen für Interface) 
4. als Conjob */1 * * * *  vnstat -u einstellen

Getestet mit PHP7.0 und php7.0-intl benötigt als Paket.
## Screenshot

![](https://github.com/3DNS/vnstat-php/blob/master/example.png)