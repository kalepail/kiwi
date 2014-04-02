kiwi
====

[Kimono](http://www.kimonolabs.com) add-on for [Statamic](http://statamic.com).

Take Kimono's structured APIs and output them into Statamic.

[Watch the video.](http://youtu.be/NWgiuPgXdvc)

## Demo
	<div id="kiwi">
		{{ kiwi key="your-account-key" id="your-api-id" collection="your-collection" }}
			<h1>{{ text }}</h1>
			<p>{{ text }}</p>
		{{ /kiwi }}
	</div>