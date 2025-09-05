<section class="section">
    <div class="w-layout-blockcontainer container w-container">
        <div class="title-wrap">
            <div data-w-id="ce2e4f7d-8eca-8067-8570-82eff2fbb894" style="opacity:0" class="top-title-wrap">
                <div class="sub-title-wrap">
                    <div>06</div>
                </div>
                <div>Integration</div>
            </div>
            <h2 data-animation="chars" class="title pricing-title">
                Connect NLT Systems with the Tools You Already Love
            </h2>
        </div>

        <div data-w-id="1cbe7367-2112-a24c-8a77-4b1839644569" class="circle-wrapper">

            <!--
      <div data-w-id="1cbe7367-2112-a24c-8a77-4b183964456a" class="circle">
        <div class="person-wrapper one">
          <img loading="lazy" src="images/ICon-2.svg" alt="" class="company-logo">
          <img loading="lazy" src="images/ICon-3.svg" alt="" class="company-logo">
        </div>
      </div>
      -->

            @foreach ($integrations as $index => $integration)
                @php
                    $dataWids = [
                        '1cbe7367-2112-a24c-8a77-4b183964456e',
                        '1cbe7367-2112-a24c-8a77-4b1839644572',
                        '1cbe7367-2112-a24c-8a77-4b1839644573', // أضف قيمًا جديدة لو زاد العدد
                    ];
                @endphp

                <div data-w-id="{{ $dataWids[$index] ?? Str::uuid() }}"
                    class="circle {{ $integration->circle_position }}">
                    <div class="person-wrapper {{ ['one', 'two', 'three'][$index % 3] }}">
                        <img loading="lazy" src="{{ asset('storage/' . $integration->image_path_1) }}" alt=""
                            class="company-logo">
                        <img loading="lazy" src="{{ asset('storage/' . $integration->image_path_2) }}" alt=""
                            class="company-logo">
                    </div>
                </div>
            @endforeach


            <img src="{{ asset('images/custom/center-logo.svg') }}" loading="lazy" alt="" class="center-logo">
        </div>
    </div>
</section>
