<div id="iconsContainer">
    @php
        $folderPath = public_path('DataSvg');
        $files = scandir($folderPath);
    @endphp

    @foreach ($files as $file)
        @if (pathinfo($file, PATHINFO_EXTENSION) === 'svg')
            <div id="popup1" class="">
                <div class="popup">
                    <div class="content">
                        <div class="pr-icons">
                            <div class="div-icons">
                                <div class="btn-icons">
                                    <div class="icon">
                                        <img src="{{ asset('DataSvg/' . $file) }}" alt="Icon">
                                    </div>
                                    <span class="css-1sns0wc">{{ pathinfo($file, PATHINFO_FILENAME) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>
