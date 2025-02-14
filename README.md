# Verwijk Makelaardij Documentatie

# Introductie
In deze documentatie ga ik over de installatie van programma's om deze website correct op uw computer te zetten en de mogelijkheid om deze lokaal aan te draaien en aanpassen.

# Inhoudsopgave
- [Verwijk Makelaardij Documentatie](#verwijk-makelaardij-documentatie)
- [Introductie](#introductie)
- [Inhoudsopgave](#inhoudsopgave)
- [1 Vereisten](#1-vereisten)
  - [1.1 Configuratiemanagement](#11-configuratiemanagement)
  - [1.2 XAMPP](#12-xampp)
  - [1.3 SCOOP](#13-scoop)
  - [1.4 Composer](#14-composer)
  - [1.5 Symfony](#15-symfony)
  - [1.6 GitHub Desktop](#16-github-desktop)
- [2 Installatie](#2-installatie)
  - [2.1 XAMPP](#21-xampp)
  - [2.2 SCOOP](#22-scoop)
  - [2.3 Composer](#23-composer)
  - [2.4 Symfony](#24-symfony)
  - [2.5 GitHub Desktop](#25-github-desktop)
- [Voetnoten](#voetnoten)

# 1 Vereisten
Om deze website lokaal te draaien heeft u de volgende programma's nodig, ik ga verder in de documentatie over elk programma:
+ Configuratiemanagement, in het geval van Windows kan dit Windows Powershell zijn, die standaard geinstalleerd staat
+ XAMPP
+ SCOOP
+ Composer
+ Symfony

## 1.1 Configuratiemanagement
De configuratiemanagement is belangrijk omdat de meeste code hier word toegepast. Windows heeft er al een geinstalleerd, dit programma heet Windows PowerShell[^1]. Apple heeft ook een programma hiervoor, alhoewel ik het afraad om Apple te gebruiken hiervoor. Het programma van Apple heet Apple Configurator[^2]. Geen installatie nodig.

## 1.2 XAMPP
XAMPP[^3] is een pakket van programma's dat je helpt om je computer in een webserver te veranderen, zodat je websites kunt draaien en testen zonder dat je een echt hostingbedrijf nodig hebt. Het maakt het makkelijk om te werken met technologieën die vaak gebruikt worden voor het bouwen van websites, zoals Apache, MySQL en PHP.

Stel je voor dat je een website wilt maken, maar je hebt geen server of hosting nodig om dit lokaal (op je eigen computer) te testen. XAMPP biedt een eenvoudige manier om die technologieën (die websites mogelijk maken) snel op je computer te installeren.

## 1.3 SCOOP
SCOOP[^4] is een programma voor Windows dat je helpt om software eenvoudig te installeren en beheren via de Command Line Interface (CLI), oftewel de opdrachtregel. In plaats van software te downloaden van websites en handmatig te installeren, kun je met SCOOP alles doen via simpele commando's in de terminal.

Stel je voor dat je een nieuwe app wilt installeren. In plaats van naar een website te gaan, het installatiebestand te downloaden, en een installatieproces te doorlopen, hoef je gewoon één commando in te voeren. SCOOP haalt de app voor je op, installeert deze, en zorgt ervoor dat alles goed werkt.

## 1.4 Composer
Composer[^5] is een programma dat je helpt om softwarepakketten (of bibliotheken) eenvoudig te beheren wanneer je websites of webapplicaties bouwt. Stel je voor dat je een bouwproject hebt en je hebt allerlei gereedschappen nodig, zoals een hamer, een zaag, enzovoort. In plaats van dat je deze gereedschappen allemaal handmatig zoekt en zelf moet installeren, kan Composer ze voor je vinden en installeren.

In de wereld van websites en webapplicaties wordt Composer vooral gebruikt voor de programmeertaal PHP. PHP is een veelgebruikte taal om dynamische websites te bouwen (zoals bijvoorbeeld blogs, online winkels, etc.). Websites die met PHP werken hebben vaak verschillende bibliotheken nodig om bepaalde functies te kunnen uitvoeren, zoals het versturen van e-mails, verbinding maken met een database, of bijvoorbeeld het verwerken van gegevens.

## 1.5 Symfony
Symfony[^6] is een softwarepakket dat helpt bij het bouwen van websites en webapplicaties. Het biedt een set van gereedschappen en richtlijnen waarmee ontwikkelaars sneller en makkelijker websites kunnen maken. Het zorgt ervoor dat veel onderdelen van de code goed georganiseerd en herbruikbaar zijn, zodat er minder fouten ontstaan en de website makkelijker te onderhouden is. Het is een soort "basis" waarop een ontwikkelaar verder kan bouwen, zonder alles helemaal vanaf nul te hoeven opzetten.

## 1.6 GitHub Desktop
Alhoewel dit optioneel is, raad ik het aan om dit programma te installeren. De code van de website staat op GitHub[^7]. Dit programma maakt het makkelijker om de website op uw computer te zetten.

# 2 Installatie
Om uw website goed toe laten draaien zijn de volgende stappen nodig. Ik zal deze beshrijven als makkelijk als ik kan.

## 2.1 XAMPP
> [!IMPORTANT]
> Installeer XAMPP niet op de C schijf. Dit kan zorgen dat de computer het programma blokkeerd.
>
> XAMPP heeft ook een lege folder nodig, het is aangeraden om deze alvast aan te maken.

Om XAMPP te installeren moet u naar de website van XAMPP gaan, via deze link: [XAMPP](https://www.apachefriends.org)
Klik op 'next' totdat het vraagt waar het programma moet komen.


## 2.2 SCOOP
Om SCOOP[^3] te installeren moet u uw configuratiemanager openen. Hierin moet u de volgende code plakken:
```shell
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
Invoke-RestMethod -Uri https://get.scoop.sh | Invoke-Expression
```

Verder hoeft u niets te doen.

## 2.3 Composer
Om Composer[^4] te installeren heeft u ook de configuratiemanager nodig, open deze weer als u deze heeft gesloten. Plak de volgende code in het programma:
```shell
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Dit installatiescript controleert gewoon een aantal php.ini-instellingen, waarschuwt u als ze onjuist zijn ingesteld en downloadt vervolgens de nieuwste composer.phar in de huidige directory. De 4 regels hierboven zullen, in volgorde:
+ Download het installatieprogramma naar de huidige directory
+ Verifieer het installatieprogramma SHA-384, wat u hier ook kunt [controleren](https://composer.github.io/pubkeys.html)
+ Voer het installatieprogramma uit
+ Verwijder het installatieprogramma

## 2.4 Symfony
Symfony is niet een programma om te installeren, maar een framework dat al in de website staat. Het enige dat nodig is om het te laten werken is om de volgende code in de configuratiemanager te plakken:
```shell
symfony check:requirements
```

Dit checkt uw computer alle vereisten heeft om een project met Symfony te laten draaien.

## 2.5 GitHub Desktop
Download GitHub Desktop[^8] van de volgende link: [GitHub Desktop](https://desktop.github.com/download/)
Volg de instructies

# Voetnoten
[^1]: Voor meer informatie, klik op deze link om naar de officiële website van Windows te gaan: [Windows Powershell](https://learn.microsoft.com/nl-nl/powershell/scripting/overview)
[^2]: Voor meer informatie, klik op deze link om naar de officiële website van Apple te gaan: [Apple Configurator](https://support.apple.com/nl-nl/apple-configurator)
[^3]: Link: [XAMPP](https://www.apachefriends.org)
[^4]: Link: [SCOOP](https://scoop.sh)
[^5]: Link: [Composer](https://getcomposer.org)
[^6]: Link: [Symfony](https://symfony.com)
[^7]: Link: [GitHub](https://github.com)
[^8]: Link: [GitHub Desktop](https://desktop.github.com)