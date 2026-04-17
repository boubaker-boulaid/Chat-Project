@extends('layouts.app')

@section('content')
    <div class="">
        <div class="chat chat-start">
            <div class="chat-bubble chat-bubble-primary">What kind of nonsense is this</div>
        </div>
        <div class="chat chat-start">
            <div class="chat-bubble chat-bubble-secondary">
                Put me on the Council and not make me a Master!??
            </div>
        </div>
        <div class="chat chat-start">
            <div class="chat-bubble chat-bubble-accent">
                That's never been done in the history of the Jedi.
            </div>
        </div>
        <div class="chat chat-start">
            <div class="chat-bubble chat-bubble-neutral">It's insulting!</div>
        </div>
        <div class="chat chat-end">
            <div class="chat-bubble chat-bubble-info">Calm down, Anakin.</div>
        </div>
        <div class="chat chat-end">
            <div class="chat-bubble chat-bubble-success">You have been given a great honor.</div>
        </div>
        <div class="chat chat-end">
            <div class="chat-bubble chat-bubble-warning">To be on the Council at your age.</div>
        </div>
        <div class="chat chat-end">
            <div class="chat-bubble chat-bubble-error">It's never happened before.</div>
        </div>

        <div class="flex justify-center items-center my-10">
            <div
                class="flex items-center h-12 w-full max-w-md text-sm text-gray-500 bg-white border border-gray-500/30 rounded">
                <button type="button" class="h-full px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M8 14s1.5 2 4 2 4-2 4-2M9 9h.01M15 9h.01" />
                    </svg>
                </button>
                <input class="outline-none bg-transparent h-full w-full" type="text" placeholder="Message...">
                <button type="button" class="h-full w-12">
                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.375 22.5v-18l21.375 9zm2.25-3.375L18.956 13.5 5.625 7.875v3.938l6.75 1.687-6.75 1.688zm0 0V7.875z"
                            fill="currentColor" fill-opacity=".7" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
@endsection
