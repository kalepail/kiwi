kiwi
====

[Kimono](http://www.kimonolabs.com) add-on for [Statamic](http://statamic.com).

Take Kimono's structured APIs and output them into Statamic.

[Watch the video.](http://youtu.be/NWgiuPgXdvc)

## Example
	<section id="kiwi">
	  {{ kiwi id="your-app-id" collection="collection-name" }}
	    <article class="post">
	      <h1>{{ title:text }}</h1>
	      <p>{{ body:text }}</p>
	    </article>
	  {{ /kiwi }}
	</section>