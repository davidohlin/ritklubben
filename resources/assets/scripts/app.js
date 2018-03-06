import Instafeed from 'instafeed';



const template = `
<div class="slide px1">
	<div class="slide__inner">
		<div class="slide__img-container">
			<img class="instagram__img" src="{{image}}" />
		</div>
		<div class="slide__caption">
			<svg class="slide__heart" viewBox="0 0 510 510">
			<path d="M255,489.6l-35.7-35.7C86.7,336.6,0,257.55,0,160.65C0,81.6,61.2,20.4,140.25,20.4c43.35,0,86.7,20.4,114.75,53.55 C283.05,40.8,326.4,20.4,369.75,20.4C448.8,20.4,510,81.6,510,160.65c0,96.9-86.7,175.95-219.3,293.25L255,489.6z"/></svg><h6 class="mb1">{{likes}} likes</h6>
			<p class="mb0">{{caption}}</p>
		</div>
	</div>
</div>`;

const feed = new Instafeed({
	get: 'user',
	userId: '324155226',
	accessToken: '324155226.1677ed0.a16bcfdc314f47d1bd2e4215ef9de3c0',
	limit: 3,
	resolution: 'standard_resolution',
	target: 'instagram',
	imageTemplate: template
});

feed.run();