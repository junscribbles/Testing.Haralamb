# Testing.Haralamb

In den vergangenen Semestern habe ich meine Webseite haralamb.ch zuerst gecoded und später in ein Wordpress-Theme verwandelt.
Im Hardcode hatte ich die Gallerie per Grid definiert und einen eigene Lightbox gecoded. Durch Wordpress wurde das Erstellen und Erweitern der Gallerie zwar einfacher, jedoch hatte ich auch weniger Einstellungsmöglichkeiten.
Schlimmer war nur noch die Lightbox. Nach einigem Recherchieren hatte ich mich für die Gratis Variante des Plugins FooBox entschieden. Das funktionierte zwar, die Gestalung und allfällige Anpassungen musste ich aber umständlich im Wordpress Backend coden.

Entsprechend habe ich mir für IM5 vorgenommen, die Gallerie sowie die Lightbox über mein Theme zu regeln.

Nach einem optimistischen Start musste ich bald merken, dass es garnicht so viele Ressourcen zur Programmierung einer eigenen Lightbox in Wordpress gibt.
Die meisten Webseiten verweisen auf ihr eigene Plugin oder auf Elementor - was ich beides nicht wollte.

Nach einigem Recherchieren stiess ich auf die JQuery Colorbox von Jack Moore (https://www.jacklmoore.com/colorbox/).
Obschon die Beispiele nicht meinem Geschmack entsprechen, dachte ich mir, dass ich das Aussehen immernoch ändern kann sobald die Lightbox implementiert ist.
Leider scheiterte es schlussendlich schon nur daran.
Im Verlauf des Projektes versuchte ich die Colorbox auf insgesamt drei Arten in mein Theme einzubinden. Einmal anhand der Anleitung von Jack Moore, einmal anhand eines Beitrages auf Sitepoint.com (https://www.sitepoint.com/adding-a-stylish-lightbox-effect-to-the-wordpress-gallery/)
und einmal anhand eines Beitrages auf jasong-designg.com (https://www.sitepoint.com/adding-a-stylish-lightbox-effect-to-the-wordpress-gallery/). Leider ohne Erfolg.
Zugegeben war es auch sehr optimistisch JQuery zu nutzen, ohne mich zuvor damit auseinander zu setzen.

Nach einem Coaching mit Nick nahm ich mir vor die Lightbox von Grund auf selber zu programmiere. Schliesslich hatte ich schon eine Vorlage von meiner vorherigen Hardcode Webseite.
Jedoch konnte ich es nicht lassen noch einmal zu recherchieren - zum Glück.
Im vierten Anlauf stiess ich auf Redpishi (https://redpishi.com/wordpress-tutorials/lightbox-wordpress/) mit dem rettenden Code.
Der Inhalt war verständlich und ähnlich aufgebaut wie meine eigene Version der Lightbox - natürlich etwas ausgeklügelter und besser.

Zu meinem Glück funktionierte der Code im ersten Anlauf. Nun musste ich nur noch einige Anpassungen unternehmen.
So wollte ich beispielsweise nicht nur das Bild, sondern auch den Titel und eine Beschreibung hinzufügen. Und obschon ich eine Idee hatte wie ich das programmieren könnte, entschied ich mich dazu die Programmierfähigkeiten von Chat-GPT zu testen.
Zuerst legte ich der AI den bestehenden Code vor und fragte, ob sie den Inhalte verstünde. Als das bestätigt wurde, liess ich Chat-GPT den Code ergänzen - und erhielt prompt was ich brauchte.

Endresultat

Probleme

Zukunft
