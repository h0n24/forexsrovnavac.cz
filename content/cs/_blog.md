{{settings}}
  "language": "cs",
  "template": 1,
  "header": "main",
  "meta" : {
    "title": "testovací stránka",
    "description": "popis testovací stránky",
    "keywords": "klíčová slova testovací stránky"
  }
{{/settings}}

# Testovací stránka

Tento php file based flat CMS používá formátovací syntaxe [Markdown](http://en.wikipedia.org/wiki/Markdown) s rozšířením [Markdown Extra](http://en.wikipedia.org/wiki/Markdown_Extra). Dále modifikovanou o vlastní upravenou syntaxi.

## Zdroje a dodatečné info
 * [Dokumentace k Markdown](http://daringfireball.net/projects/markdown/syntax)
 * [Dokumentace k Markdown Extra](http://michelf.ca/projects/php-markdown/extra/)

## Vlastní syntaxe

Do každého souboru je možno umístit vlastní nastavení stránky mezi značky {​​&#8203;{settings}} a {​​&#8203;{/settings}}. Pozor: text umístěný nad {​​&#8203;{settings}} je automaticky oříznut.

**{​​&#8203;{settings}}**

	"language": "jazyk v mezinárodním značení, kupříkladu cs nebo en",  
	"template": "zvolený template",  
	"meta" : {  
		"title": "titulek stránky",  
		"description": "meta tag description",  
		"keywords": "klíčová slova související se stránkou"  
	}

**{​​&#8203;{/settings}}**  

Stránky je možno vnořit do druhých. Soubory, které jsou umístěny ve složce content/_partials/ mohou být opakovaně volány.

Příklad:
**{&#8203;{partial: jak-spravne-vybrat-brokera}}** 


## Tvoření podstránek a automatické generování url

Soubor *content/index.md* vygeneruje webovou stránku s url *www.vaše-nová-stránka.cz**/***  
Soubor *content/text.md* vygeneruje webovou stránku s url *www.vaše-nová-stránka.cz**/text***  
Soubor *content/sub/index.md* vygeneruje webovou stránku s url *www.vaše-nová-stránka.cz**/sub***  
Soubor *content/sub/text.md* vygeneruje webovou stránku s url *www.vaše-nová-stránka.cz**/sub/text***  

Pokud je zavolána url, která neexistuje, použije se content/404.md

# Příklady syntaxe

Stylování textu:  
*kurzíva*  
**tučné** 

[odkaz](#credits) a zase [jiný odkaz](http://www.google.com/)

Odrážky:  

 * základní
	* vnořené

horizontální linka:

---


# Nadpis h1
## Podnadpis h2
### Podnadpis h3
#### Podnadpis h4

> Citát

	<body>
	<p>zobrazení kódu</p>
	</body>


## Copyright

Zdrojový kód vytvořil Jan Šablatura &copy; 2014. Jakékoli šíření kódu nebo jejich částí je zakázáno.