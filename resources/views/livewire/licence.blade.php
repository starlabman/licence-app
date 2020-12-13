<div>
   <h1 class="text-secondary"> Your licence is currency for <strong>{{ pluralize($teamSize, 'person', ' people')}}</strong>.
</h1>

<input type="range" wire:model = "teamSize" min="1" max="10" value="2" class="form-control-range">
   
<h2 class="mt-5"> Amount: {{ money($amount)}}</h2>


</div>
