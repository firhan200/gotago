@extends('layout')

@section('content')
    <div class="container mx-auto px-4 lg:px-0 h-screen flex" id="banner">
        <section class="my-auto">
            <div class="flex flex-col lg:flex-row">
                <div class="my-auto basis-1/2 mb-4">
                    <img src={{ asset('/imgs/undraw_progressive_app_m9ms.png') }} class="w-100"/>
                </div>
                <div class="my-auto basis-1/2 text-center lg:text-start">
                    <div class="text-2xl mb-2 font-bold">
                        {{ setting('site.headline') }}
                    </div>
                    <div class="text-slate-600 mt-6">
                        {{ setting('site.sub_headline') }}
                    </div>
                    <div class="mt-12">
                        <a href="mailto:{{ setting('site.contact_email_address') }}" class="shadow-md border hover:shadow-xl hover:shadow-indigo-300 border-gray-100 shadow-indigo-200 text-indigo-700 font-bold px-6 py-3 rounded-2xl ease-in duration-100">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container mx-auto px-4 lg:px-0 py-32" id="services">
        <section class="my-auto">
            <div class="text-center text-2xl mb-12">Our Services</div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                @foreach ($our_services as $our_service)
                <div class="shadow-xl drop-shadow-sm shadow-indigo-100 w-full py-8 px-16 rounded text-center hover:bg-indigo-500 hover:text-white ease-in duration-150">
                    <div class="w-20 h-20 bg-gray-100 rounded-full mx-auto my-auto overflow-hidden">
                        <img src={{ Voyager::image($our_service->icon) }} class="w-full h-full"/>
                    </div>
                    <div class="text-xl font-bold mt-8">{{ $our_service->title }}</div>
                    <div class="text-md font-thin mt-4">{{ $our_service->description }}</div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <div class="bg-gray-100 py-32" id="what-we-do">
        <div class="container mx-auto p-4 lg:p-0">
            <section>
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="mb-8">
                        <div class="text-center lg:text-start">
                            <div class="text-2xl mb-2 font-bold">Creating Website and Mobile Applications.</div>
                            <div class="text-slate-600 mt-6">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, tenetur maxime? Officiis nisi odio molestiae perspiciatis magni laboriosam beatae numquam explicabo amet aut ab quod eos, architecto cum omnis nihil.
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-12">
                            <?php for($i=0;$i<6;$i++){ ?>
                                <div class="bg-white p-4 rounded border-l-2 border-l-indigo-500 hover:bg-indigo-500 hover:text-white ease-in duration-150 shadow-md shadow-indigo-100 hover:shadow-xl">Website Development</div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <img src="{{ asset('/imgs/undraw_visionary_technology_re_jfp7.svg') }}" class="w-80"/>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="container mx-auto px-4 lg:px-0 py-32" id="team">
        <section>
            <div class="text-center text-2xl mb-12">Tim Kami</div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                @foreach ($teams as $team)
                <div>
                    <div class="mx-auto h-60 w-60 overflow-hidden ease-in duration-150 hover:shadow-2xl rounded-full hover:shadow-gray-300 hover:animate-bounce">
                        <img src="{{ Voyager::image($team->avatar) }}" class="object-fit w-full"/>
                    </div>
                    <div class="text-center my-4">
                        <div class="text-lg">{{ $team->name }}</div>
                        <div class="text-indigo-800">{{ $team->role }}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

    <div class="bg-indigo-800 py-32">
        <div class="container mx-auto p-4 lg:p-0">
            <section id="portfolios">
                <div class="text-center text-2xl mb-12 text-white">Portfolio</div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    @foreach ($portfolios as $portfolio)
                        <div class="shadow shadow-indigo-300 rounded bg-white">
                            <div>
                                <img src="{{ Voyager::image($portfolio->image_cover) }}" />
                            </div>
                            <div class="bg-white p-6 text-center">
                                <div class="text-lg mb-2">{{ $portfolio->title }}</div>
                                <div class="text-slate-500 text-sm">
                                    {{ strlen($portfolio->description) > 100 ? substr($portfolio->description, 0, 100) . '...' : $portfolio->description }}
                                    <div>
                                        <button type="button" class="bg-indigo-500 px-6 py-2 text-white rounded mt-3 hover:shadow-lg hover:shadow-indigo-300 ease-in duration-200">Lihat Lebih Banyak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
@endsection