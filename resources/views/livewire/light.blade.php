<div>
    <h2>&#128161;{{$brightness}}%</h2>
    <div class="progress" style="height: 30px;">
        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width:{{$brightness}}%"
            aria-valuenow={{$brightness}} aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <div class="mt-2">
        <button class="btn btn-danger" wire:click="off">Off</button>
        <button class="btn btn-secondary" wire:click="increment" @disabled($brightness > 90)>+</button>
        <button class="btn btn-secondary" wire:click="decrement" @disabled($brightness < 10)>-</button>
        <button class="btn btn-primary" wire:click="on">On</button>
    </div>
</div>
