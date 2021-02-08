# AlleAktien Quantitativ Bundle for Contao CMS

# German

Mit einem Shortcode kannst du einzelne Grafiken von (AlleAktien Quantitativ)[https://www.alleaktien.de/quantitativ] kostenlos einbetten, um langfristige, stets aktuelle, und vor allem interaktive fundamentale Aktienkennzahlen anzuzeigen. Mit nur einem einzigen Shortcode. Die Installation dauert weniger als 10 Sekunden.
Das Copyright der Grafiken und Inhalte liegt bei (AlleAktien Quantitativ)[https://www.alleaktien.de/quantitativ].

## AlleAktien Quantitativ

* Immer aktuelle und verlässliche Kennzahlen direkt von AlleAktien
* Interaktive Charts – einzigartiger Mehrwert für die Besucher
* 20 Jahre fundamentale Kennzahlen
* 2.000+ Aktien weltweit
* 100% kostenlos
* 100% iPhone und iPad optimiert

### Tag Beispiele

```
{{aaq::US4781601046::RevenueChart}}
{{aaq::US4781601046::DividendChart}}
```

### Demo

Auf (finanzsecura.de)[] haben wir einige AlleAktien Quantitativ Charts als Demo eingebunden.

### Verfügbare Parameter

```
isin (required): Die ISIN der Aktie
chart (required): Der Chart-Typ

Aufbau des Tags: {{aaq::isin::chart}}
```

### Parameter Chart / Chart-Typen

**QuoteChart**: Aktienkurs der letzten 20 Jahre, tagesgenau
**RevenueChart**: Umsatz, EBIT, und Gewinn
**RevenuePerShareChart**: Umsatz, EBIT, Gewinn pro Aktie
**MarginsChart**: Bruttomarge, EBIT-Marge, Gewinnmarge
**DividendChart**: Dividenden
**DividendYieldChart**: Dividendenrendite
**PayoutRatioChart**: Ausschüttungsquote (Dividenden / Gewinn pro Aktie)
**SharesOutstandingChart**: Anzahl ausstehender Aktien
**ValuationChart**: KGV, KUV, und EBIT-Multiple´


### Screenshots

![Microsoft Chart](https://ps.w.org/alleaktien-quantitativ/assets/screenshot-1.png?rev=2446231)

### Haftungshinweis und Nutzungsrechte

Das Copyright der Grafiken, Design, Daten und Inhalte liegt bei (AlleAktien Quantitativ)[https://www.alleaktien.de/quantitativ]. Obwohl wir alle Datenpunkte nach bestem Wissen und Gewissen sorgfältig prüfen, können wir die Richtigkeit jeder einzelnen Kennzahl natürlich nicht garantieren. Bei Aktien ist der Totalverlust des eingesetzten Kapitals möglich. AlleAktien behält sich das Recht vor, einzelnen Webseiten das Nutzungsrecht (z.B., bei Missbrauch) ohne Nennung von Gründen zu entziehen.

Inspiriert von (AlleAktien Quantitativ Wordpress Plugin)[https://wordpress.org/plugins/alleaktien-quantitativ/]

### Installation

#### mit dem Contao Manager

* Contao Manager aufrufen und anmelden  
* Pakete installieren auswählen  
* im Suchfeld “Social Feed” eingeben  
* auf Prüfen & Installieren klicken und Änderungen anwenden  


#### mit Composer

    composer require pdir/contao-alleaktien-quantitativ-bundle

### Nutzung

Insert-Tag {{aaq::isin::chart}} in Beiträgen und Seiten verwenden. Die Daten werden automatisch aktualisiert.

## Release

Run the PHP-CS-Fixer and the unit test before you release your bundle:

```bash
vendor/bin/ecs check src/ tests/ --fix
vendor/bin/phpunit
```
