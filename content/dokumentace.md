<div class="row">
<div class="col-md-9" markdown="1">

# Dokumentace 
## Úvod {#uvod}
Markdown je jednoduchý formát textového souboru, který slouží pro následný převod do formátu HTML. Umožňuje pomocí speciálních formátovacích značek strukturovat text. 

### Filozofie
> Cílem Markdownu je být co nejjednodušší - snadný ke čtení i psaní.

Zdrojový dokument musí být takový, aby jej bylo velmi snadné číst. Proto je syntaxe složena výhradně z interpunkčních znamének.

### Používání HTML {#html}
Markdown nenahrazuje HTML, ale naopak jej doplňuje. 

#### Řádkové elementy
Inline HTML kód uvnitř dokumentu markdown je bez problému zachován.

    Markdown syntaxi je možno libovolně kombinovat s HTML syntaxí. Kupříkladu <strong>tučné písmo</strong> bude vypadat identicky jako **tučné písmo**

#### Blokové elementy
Jediná *restrikce* HTML je v případě blokových elementů (například `<div>`, `<table>`, `<pre>`, `<p>`). Ty musí být odděleny od zbytku obsahu prázdným řádkem nad a pod.

*Kupříkladu, chcete-li přidat HTML tabulku do Markdown kódu, správný postup vypadá takto:*

    Toto je normální odstavec

    <table>
        <tr>
            <td>Test</td>
        </tr>
    </table>

    A toto je další odstavec

##### Markdown uvnitř HTML elementů
Syntaxi Markdown uvnitř HTML blokových elementů systém přeskakuje. Syntaxi lze znovu zapnout pomocí atributu `markdown="1"`.

*Příklad:*

    <div>
      **Hvězdičky** budou znázorněny a text nebude formátován.
    </div>

    <div markdown="1">
      **Hvězdičky** budou formátovány tučně.
    </div>

*Ukázka příkladu výše:*

<div>
  **Hvězdičky** budou znázorněny a text nebude formátován.
</div>

<div markdown="1">
  **Hvězdičky** budou formátovány tučně.
</div>

## Syntaxe Markdown & Markdown Extra
### Odstavce a konce řádku {#odstavce}

*Příklad:*

    Paragraf textu (v HTML `<p>`) je automaticky vytvořen s každou mezerou na řádku.

    Oproti tomu zalomení řádku (v HTML `<br>`)
    je tvořeno dvěmi mezerami na konci řádku.

    V opačném případě
    bude text jen na jednom řádku.

*Ukázka příkladu výše:*

Paragraf textu (v HTML `<p>`) je automaticky vytvořen s každou mezerou na řádku.

Oproti tomu zalomení řádku (v HTML `<br>`)  
je tvořeno dvěmi mezerami na konci řádku.

V opačném případě
bude text jen na jednom řádku.  

### Nadpisy {#nadpisy}
Nadpisy jsou tvořeny pomocí mřížek (#), čím větší počet, tím menší nadpis/podnadpis

*Příklad:*

    # Toto je nadpis velikosti h1
    ## Toto je nadpis velikosti h2
    ### Toto je nadpis velikosti h3
    #### Toto je nadpis velikosti h4
    ##### Toto je nadpis velikosti h5
    ###### Toto je nadpis velikosti h6

### Blockquote {#blockquote}
*Příklad:*

    > Bloková citace, čili odstavec s větším odsazením vlevo, se tvoří pomocí znaku >
    >> Je možné jej i vnořovat

### Seznamy s odrážkami {#ul}
*Příklad:*

    * červená
    * zelená
    * Modrá

      odrážky lze formátovat i uvnitř, kupříkladu vnořeným odstavcem - stačí přidat mezery

    * a formátování zůstane zachováno

*Ukázka příkladu výše:*

* červená
* zelená
* Modrá

  odrážky lze formátovat i uvnitř, kupříkladu vnořeným odstavcem - stačí přidat mezery

* a formátování zůstane zachováno

### Číslované seznamy {#ol}
*Příklad:*

    1. červená
    2. zelená
    3. modrá
    5. číslování je automaticky opraveno

*Ukázka příkladu výše:*

1. Červená
2. Zelená
3. Modrá
5. Číslování je automaticky opraveno

Poznámka: v případě, že nechcete z nějakého důvodu používat číslování, je možné použít \ pro zrušení funkčnosti

    1\. světová válka byla...

### Bloky s kódem {#code}
*Příklad:*

    Bloky zdrojového kódu jsou tvořeny pomocí čtyř mezer nebo jednoho tabulátoru

        Toto je blok kódu

*Ukázka příkladu výše:*

Bloky zdrojového kódu jsou tvořeny pomocí čtyř mezer nebo jednoho tabulátoru

    Toto je blok kódu

### Horizontální linka {#hr}
*Příklad:*

    Je tvořena pomocí třech pomlček oddělených mezerou
    - - -
    nebo také řadou pomlček
    -----------

### Odkazy {#odkazy}
*Příklad:*

    Toto je [příklad](http://google.com/ "Titulek odkazu") odkazu.

    [Tento odkaz](/relativni-url/) nemá titulek.

    Pokud používáte nějaký odkaz vícekrát, je možno mu přidat štítek, kupříkladu [2] nebo [hlavni-stranka].

    Poté stačí kdekoli v dokumentu napsat  
    [2]: http://google.com/ "nepovinný titulek stránky"
    [hlavni-stranka]: http://moje-stranka.cz/

    Rovněž je možné labely nechat prázdné a pak je zavolat podle názvu, kupříkladu [Google][]

    [Google]: http://google.com

Pozor: názvy štítku nejsou case-sensitive, čili [a] je identické jako [A]

#### Emailové odkazy
*Příklad:*

    Markdown, umí pracovat i s emaily:
    <muj-email@moje-schranka.cz> vytvoří klikatelný emailový odkaz.

### Tučné písmo a kurzíva {#zvyrazneni}
*Příklad:*
    
    **Tučné písmo** je tvořeno dvěmi hvězdičkami, zatímco *kurzíva* jen jednou.

    V případě, že nechcete text zvýraznit, použijte \*, jinými slovy \*toto nebude formátováno\*

### Inline zdrojový kód
*Příklad:*
    
    Toto je HTML tag `<strong>` který bude zvýrazněn.

*Ukázka příkladu výše:*

Toto je HTML tag `<strong>` který bude zvýrazněn.

### Obrázky {#obrazky}
*Příklad:*
    
    ![Alt text obrázku](/cesta/k/obrázku.jpg)
    ![Alt text obrázku](/cesta/k/obrázku.jpg "nepovinný titulek obrázku")

    ![Alt text obrázku][štítek]
    [štítek]: /cesta/k/obrázku.jpg "nepovinný titulek obrázku (zobrazí se po najetí myší)"

### Tabulky {#tabulky}
*Příklad:*

    | První nadpis     | Druhý nadpis  |
    | ---------------- | ------------- |
    | Buňka s obsahem  | Další buňka   |
    | Buňky nemusí být identické | A ani nemusí končit svislítkem

*Ukázka příkladu výše:*

| První nadpis     | Druhý nadpis  | 
| ---------------- | ------------- |
| Buňka s obsahem  | Další buňka   |
| Buňky nemusí být identické | A ani nemusí končit svislítkem

### Definiční listy {#dl}
*Příklad:*

    Jablko
    : Jablko je plod jabloně, patří mezi nejběžnější druhy ovoce nejen ve střední Evropě.

    Hruška
    Švestka
    : Je ovoce s velmi nízkým obsahem vitamínu C.

*Ukázka příkladu výše:*

Jablko
: Jablko je plod jabloně, patří mezi nejběžnější druhy ovoce nejen ve střední Evropě.

Hruška
Švestka
: Je ovoce s velmi nízkým obsahem vitamínu C.

### Poznámky pod čarou {#ref}
*Příklad:*

    Toto je text s poznámkou pod čarou, která se zobrází úplně na konci stránky. Obvykle se používá pro reference.[^1]

    [^1]: Toto je poznámka pod čarou

*Ukázka příkladu výše:*

Toto je text s poznámkou pod čarou, která se zobrází úplně na konci stránky. Obvykle se používá pro reference.[^1]

[^1]: Toto je poznámka pod čarou

Zkratky (abbr) {#abbr}
*Příklad:*

    Pokud kdekoli v dokumentu vytvoříte zkratku,
    *[HTML]: Hyper Text Markup Language
    *[abbr]: zkrácený "abbreviated" text
    
    v celém dokumentu budou automaticky vytvořeny příslušné abbr.

*Ukázka příkladu:*

Pokud kdekoli v dokumentu vytvoříte zkratku,
*[HTML]: Hyper Text Markup Language
*[abbr]: zkrácený "abbreviated" text

v celém dokumentu budou automaticky vytvořeny příslušné abbr.

## Vlastní syntaxe {#vlastni}

### Nastavení jednotlivé stránky {{&#8203;settings}} {#settings}
Na začátek každého souboru je možno umístit vlastní nastavení stránky mezi značky *{​​​{&#8203;settings}}* a *{​​​{/&#8203;settings}}*.

    {{ settings}}
      "language": "cs",
      "template": 1,
      "header": "main",
      "meta" : {
        "title": "testovací stránka",
        "description": "popis testovací stránky",
        "keywords": "klíčová slova testovací stránky"
      }
    {{/ settings}}

    Poznámka: z technických důvodů byla za {{ a {{/ umístěna mezera, aby systém, který formátuje tuto stránku, kód zobrazil.
    Ve zdrojovém souboru tato mezera být správně nemá.

#### "language"
Definuje jednotlivé jazykové verze webu. Používá se jazykový dvojpísmenný kód dle [ISO 639-1](http://cs.wikipedia.org/wiki/Seznam_k%C3%B3d%C5%AF_ISO_639-1).

Příklady jazykových kódů:
jazyk | kód
----- | ---
čeština | cs
angličtina | en
němčina | de
polština | pl
francouzština | fr
slovenština | sk

#### "template"
Definuje použitý template (označen čísly).

#### "header"
Definuje použitou hlavičku. Ta je umístěna v adresáři content/\_partials/ název složky dle použité jazyková verze (např. cs) /header/ zvolené jméno hlavičky.md.  
Kupříkladu: *content/\_partials/cs/header/main.md*

#### "meta"
Jednotlivé meta tagy - titulek, popis stránky a její klíčová slova. Použije se jak pro klasické meta tagy, tak i pro facebook open graph protokol.

### Vkládání stránky do jiné stránky {{&#8203;partial}} {#partial}
Stránky je možno vnořit do druhých. Soubory, které jsou umístěny ve složce content/_partials/ mohou být opakovaně volány.

Příklad:
*{&#8203;{partial: jak-spravne-vybrat-brokera}}*

### Automatické generování sekcí textu {{&#8203;section}} {#section}


## Zdroje
* [Dokumentace Markdown syntaxe](http://daringfireball.net/projects/markdown/syntax) (v angličtině)
* [Dokumentace Markdown Extra syntaxe](http://michelf.ca/projects/php-markdown/extra/) (v angličtině)
* [Wiki: co je to Markdown](http://cs.wikipedia.org/wiki/Markdown)

</div>
<div class="col-md-3">
<div class="hidden-print affix" role="complementary">
<ul class="nav">
              
<li>
  <a href="#html">Používání HTML syntaxe</a>
</li>
<li>
  <a href="#odstavce">Odstavce</a>
</li>
<li>
  <a href="#nadpisy">Nadpisy</a>
</li>
<li>
  <a href="#ul">Číslované a nečíslované seznamy</a>
</li>
<li>
  <a href="#odkazy">Odkazy</a>
</li>
<li>
  <a href="#zvyrazneni">Tučné písmo a kurzíva</a>
</li>
<li>
  <a href="#obrazky">Obrázky</a>
</li>
<li>
  <a href="#obrazky">Tabulky</a>
</li>
<li>
  <a href="#obrazky">Nastavení {{&#8203;settings}}</a>
</li>
      
</ul>

</div>
</div>
</div>