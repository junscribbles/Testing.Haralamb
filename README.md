# Aktueller Stand und Ziel

In den vergangenen Semestern habe ich meine Webseite haralamb.ch zuerst gecoded und später in ein Wordpress-Theme verwandelt.
Im Hardcode hatte ich die Gallerie per Grid definiert und einen eigene Lightbox gecoded. Durch Wordpress wurde das Erstellen und Erweitern der Gallerie zwar einfacher, jedoch hatte ich auch weniger Einstellungsmöglichkeiten.
Schlimmer war nur noch die Lightbox. Nach einigem Recherchieren hatte ich mich für die Gratis Variante des Plugins FooBox entschieden. Das funktionierte zwar, die Gestalung und allfällige Anpassungen musste ich aber umständlich im Wordpress Backend coden.

Entsprechend habe ich mir für IM5 vorgenommen, die Gallerie sowie die Lightbox über mein Theme zu regeln.

# Iterationen und Ansätze

Nach einem optimistischen Start musste ich bald merken, dass es garnicht so viele Ressourcen zur Programmierung einer eigenen Lightbox in Wordpress gibt.
Die meisten Webseiten verweisen auf ihr eigene Plugin oder auf Elementor - was ich beides nicht wollte.

Nach einigem Recherchieren stiess ich auf die JQuery Colorbox von Jack Moore (https://www.jacklmoore.com/colorbox/).
Obschon die Beispiele nicht meinem Geschmack entsprechen, dachte ich mir, dass ich das Aussehen immernoch ändern kann sobald die Lightbox implementiert ist.
Leider scheiterte es schlussendlich schon nur daran.
Im Verlauf des Projektes versuchte ich die Colorbox auf insgesamt drei Arten in mein Theme einzubinden. Einmal anhand der Anleitung von Jack Moore, einmal anhand eines Beitrages auf Sitepoint.com (https://www.sitepoint.com/adding-a-stylish-lightbox-effect-to-the-wordpress-gallery/)
und einmal anhand eines Beitrages auf jasong-designg.com (https://www.jasong-designs.com/2020/03/30/adding-a-robust-lightbox-script-to-a-wordpress-theme/). Leider ohne Erfolg.
Zugegeben war es auch sehr optimistisch JQuery zu nutzen, ohne mich zuvor damit auseinander zu setzen.
(Die verworfenen Ansätze sind im Ordner "unused scripts" abgelegt)

Nach einem Coaching mit Nick nahm ich mir vor die Lightbox von Grund auf selber zu programmiere. Schliesslich hatte ich schon eine Vorlage von meiner vorherigen Hardcode Webseite.
Jedoch konnte ich es nicht lassen noch einmal zu recherchieren - zum Glück.
Im vierten Anlauf stiess ich auf Redpishi (https://redpishi.com/wordpress-tutorials/lightbox-wordpress/) mit dem rettenden Code.
Der Inhalt war verständlich und ähnlich aufgebaut wie meine eigene Version der Lightbox - natürlich etwas ausgeklügelter und besser.

Zu meinem Glück funktionierte der Code im ersten Anlauf. Nun musste ich nur noch einige Anpassungen unternehmen.
So wollte ich beispielsweise nicht nur das Bild, sondern auch den Titel und eine Beschreibung hinzufügen. Und obschon ich eine Idee hatte wie ich das programmieren könnte, entschied ich mich dazu die Programmierfähigkeiten von Chat-GPT zu testen.
Zuerst legte ich der AI den bestehenden Code vor und fragte, ob sie den Inhalte verstünde. Als das bestätigt wurde, liess ich Chat-GPT den Code ergänzen - und erhielt prompt was ich brauchte.

Nun musste ich das ganze nur noch richtig stylen, einen Close-Button erstellen und responsive machen und fertig war die Gallerie und Lightbox.

# Probleme

Obschon die Gallerie und Litghtbox im Frontend gut aussieht und funktioniert, läuft nich alles so wie ich geplant habe.
Beim Upload eines Bildes in die Wordpress Library kann man Titel, Caption und Alternative Title definieren. Leider werden diese Parameter standardmässig nicht an die Gallerie weitergegeben.
Aktuell muss ich den Titel sowie die Beschreibung in der Gallerie definieren. Die Inhalte in der Library haben keinen Einfluss.

Währenddem die Lightbox geöffnet ist, erhält der Body die Klasse "stop-scrolling" welche die Werte "Height: 100%, Overflow: hidden" enthält.
So konnte ich das Scrollen währenddem die Lightbox geöffnet ist in vorigen Versionen verhindern. Leider funktioniert es im Moment nicht und ich fand bisher nicht heraus weshalb.

# Zukunft

Im moment läuft mein Projekt noch auf der Testseite testing.haralamb.ch
Bevor ich die Gallerie sowie Lightbox auf meine Hauptseite übernehme werde ich versuchen das Problem mit Titel, Caption usw. sowie dem Scrolling zu beheben.
Falls sich das nicht einfach lösen lässt, werde ich mit den Problemen leben können.
Im Anschluss zu IM5 werde ich die Gallerie und Lightbox auf meine Hauptseite übernehmen.

# Quellen

https://www.jacklmoore.com/colorbox/
https://www.sitepoint.com/adding-a-stylish-lightbox-effect-to-the-wordpress-gallery/
https://www.jasong-designs.com/2020/03/30/adding-a-robust-lightbox-script-to-a-wordpress-theme/
https://redpishi.com/wordpress-tutorials/lightbox-wordpress/
Chat-GPT (im Code deklariert)
