@extends('layout.app')

@section('precontent')
    <div class="lg:border-t lg:border-b lg:border-gray-200">
        <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Progress">
            <ol role="list"
                class="rounded-md overflow-hidden lg:flex lg:border-l lg:border-r lg:border-gray-200 lg:rounded-none">
                <li class="relative overflow-hidden lg:flex-1">
                    <div class="border border-gray-200 overflow-hidden border-b-0 rounded-t-md lg:border-0">
                        <!-- Completed Step -->
                        <a href="#" class="group">
                            <span
                                class="absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-200 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
                                aria-hidden="true"></span>
                            <span class="px-6 py-5 flex items-start text-sm font-medium">
              <span class="flex-shrink-0">
                <span class="w-10 h-10 flex items-center justify-center bg-emerald-600 rounded-full">
                  <!-- Heroicon name: solid/check -->
                  <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                       fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                          clip-rule="evenodd"/>
                  </svg>
                </span>
              </span>
              <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                <span class="text-xs font-semibold tracking-wide uppercase">Création de compte</span>
                <span class="text-sm font-medium text-gray-500">Créez votre compte pour la plateforme.</span>
              </span>
            </span>
                        </a>
                    </div>
                </li>

                <li class="relative overflow-hidden lg:flex-1">
                    <div class="border border-gray-200 overflow-hidden lg:border-0">
                        <!-- Current Step -->
                        <a href="#" aria-current="step">
                            <span
                                class="absolute top-0 left-0 w-1 h-full bg-emerald-600 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
                                aria-hidden="true"></span>
                            <span class="px-6 py-5 flex items-start text-sm font-medium lg:pl-9">
              <span class="flex-shrink-0">
                <span class="w-10 h-10 flex items-center justify-center border-2 border-emerald-600 rounded-full">
                  <span class="text-emerald-600">02</span>
                </span>
              </span>
              <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                <span class="text-xs font-semibold text-emerald-600 tracking-wide uppercase">Personnel</span>
                <span class="text-sm font-medium text-gray-500">Vos informations d'identification personnelles</span>
              </span>
            </span>
                        </a>

                        <!-- Separator -->
                        <div class="hidden absolute top-0 left-0 w-3 inset-0 lg:block" aria-hidden="true">
                            <svg class="h-full w-full text-gray-300" viewBox="0 0 12 82" fill="none"
                                 preserveAspectRatio="none">
                                <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                      vector-effect="non-scaling-stroke"/>
                            </svg>
                        </div>
                    </div>
                </li>

                <li class="relative overflow-hidden lg:flex-1">
                    <div class="border border-gray-200 overflow-hidden border-t-0 rounded-b-md lg:border-0">
                        <!-- Upcoming Step -->
                        <a href="#" class="group">
                            <span
                                class="absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-200 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
                                aria-hidden="true"></span>
                            <span class="px-6 py-5 flex items-start text-sm font-medium lg:pl-9">
              <span class="flex-shrink-0">
                <span class="w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-full">
                  <span class="text-gray-500">03</span>
                </span>
              </span>
              <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                <span class="text-xs font-semibold text-gray-500 tracking-wide uppercase">Professionnel</span>
                <span class="text-sm font-medium text-gray-500">Votre parcours académique et professionnel</span>
              </span>
            </span>
                        </a>

                        <!-- Separator -->
                        <div class="hidden absolute top-0 left-0 w-3 inset-0 lg:block" aria-hidden="true">
                            <svg class="h-full w-full text-gray-300" viewBox="0 0 12 82" fill="none"
                                 preserveAspectRatio="none">
                                <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                      vector-effect="non-scaling-stroke"/>
                            </svg>
                        </div>
                    </div>
                </li>
                <li class="relative overflow-hidden lg:flex-1">
                    <div class="border border-gray-200 overflow-hidden border-t-0 rounded-b-md lg:border-0">
                        <!-- Upcoming Step -->
                        <a href="#" class="group">
                            <span
                                class="absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-gray-200 lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
                                aria-hidden="true"></span>
                            <span class="px-6 py-5 flex items-start text-sm font-medium lg:pl-9">
              <span class="flex-shrink-0">
                <span class="w-10 h-10 flex items-center justify-center border-2 border-gray-300 rounded-full">
                  <span class="text-gray-500">04</span>
                </span>
              </span>
              <span class="mt-0.5 ml-4 min-w-0 flex flex-col">
                <span class="text-xs font-semibold text-gray-500 tracking-wide uppercase">Documents</span>
                <span class="text-sm font-medium text-gray-500">Les documents a fournir</span>
              </span>
            </span>
                        </a>

                        <!-- Separator -->
                        <div class="hidden absolute top-0 left-0 w-3 inset-0 lg:block" aria-hidden="true">
                            <svg class="h-full w-full text-gray-300" viewBox="0 0 12 82" fill="none"
                                 preserveAspectRatio="none">
                                <path d="M0.5 0V31L10.5 41L0.5 51V82" stroke="currentcolor"
                                      vector-effect="non-scaling-stroke"/>
                            </svg>
                        </div>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <div class="p-10">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="rounded-md bg-blue-50 p-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/information-circle -->
                    <svg class="h-5 w-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3 flex-1 md:flex md:justify-between">
                    <p class="text-sm text-blue-700">
                        Vous devez terminer les étapes pour finaliser votre demande d'adhésion et que celle ci soit traité par l'administration.
                    </p>
                    <p class="mt-3 text-sm md:mt-0 md:ml-6">
                        <a href="#" class="whitespace-nowrap font-medium text-blue-700 hover:text-blue-600">Détails <span aria-hidden="true">&rarr;</span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <div class="xl:col-span-2 xl:pr-8 xl:border-r xl:border-gray-200">
        <div>
            <div>
                <div class="md:flex md:items-center md:justify-between md:space-x-4 xl:border-b xl:pb-6">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">A quoi sert la plateforme</h1>

                    </div>
                    <div class="mt-4 flex space-x-3 md:mt-0">

                        <button type="button"
                                class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                            <!-- Heroicon name: solid/bell -->
                            <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                            </svg>
                            <span>Souscrire</span>
                        </button>
                    </div>
                </div>
                <aside class="mt-8 xl:hidden">
                    <h2 class="sr-only">Details</h2>
                    <div class="space-y-5">
                        <div class="flex items-center space-x-2">
                            <!-- Heroicon name: solid/lock-open -->
                            <svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path
                                    d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z"/>
                            </svg>
                            <span class="text-green-700 text-sm font-medium">Open Issue</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <!-- Heroicon name: solid/chat-alt -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-900 text-sm font-medium">4 comments</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <!-- Heroicon name: solid/calendar -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                 fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-900 text-sm font-medium">Created on <time datetime="2020-12-02">Dec 2, 2020</time></span>
                        </div>
                    </div>
                    <div class="mt-6 border-t border-b border-gray-200 py-6 space-y-8">
                        <div>
                            <h2 class="text-sm font-medium text-gray-500">Assignees</h2>
                            <ul role="list" class="mt-3 space-y-3">
                                <li class="flex justify-start">
                                    <a href="#" class="flex items-center space-x-3">
                                        <div class="flex-shrink-0">
                                            <img class="h-5 w-5 rounded-full"
                                                 src="https://ui-avatars.com/api/?size=80&name={{ Auth::user()->username }}"
                                                 alt="">
                                        </div>
                                        <div class="text-sm font-medium text-gray-900">Eduardo Benz</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="text-sm font-medium text-gray-500">Tags</h2>
                            <ul role="list" class="mt-2 leading-8">
                                <li class="inline">
                                    <a href="#"
                                       class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                                        <div class="absolute flex-shrink-0 flex items-center justify-center">
                                            <span class="h-1.5 w-1.5 rounded-full bg-rose-500"
                                                  aria-hidden="true"></span>
                                        </div>
                                        <div class="ml-3.5 text-sm font-medium text-gray-900">Bug</div>
                                    </a>
                                </li>
                                <li class="inline">
                                    <a href="#"
                                       class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5">
                                        <div class="absolute flex-shrink-0 flex items-center justify-center">
                                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"
                                                  aria-hidden="true"></span>
                                        </div>
                                        <div class="ml-3.5 text-sm font-medium text-gray-900">Accessibility</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <div class="py-3 xl:pt-6 xl:pb-0">
                    <h2 class="sr-only">Description</h2>
                    <div class="prose max-w-none">
                        <p>
                            Conformément à l’article XXXX du code de la santé publique, vous devez demander votre
                            inscription auprès du conseil départemental de l’Ordre des médecins du lieu où vous
                            envisagez d’exercer (en cas de changement de résidence professionnelle déposez une nouvelle
                            demande d'inscription).
                        </p>
                        <p>
                            Cette plateforme est mise a votre disposition afin de faciliter ce processus et en avoir le
                            suivi le plus clair pour vous et pour l'administration en charge .
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <section aria-labelledby="activity-title" class="mt-8 xl:mt-10">
            <div>
                <div class="divide-y divide-gray-200">
                    <div class="pb-4">
                        <h2 id="activity-title" class="text-lg font-medium text-gray-900">Historique</h2>
                    </div>
                    <div class="pt-6">
                        <!-- Activity feed-->
                        <div class="flow-root">
                            <ul role="list" class="-mb-8">
                                <li>
                                    <div class="relative pb-8">
                                        <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"
                                              aria-hidden="true"></span>
                                        <div class="relative flex items-start space-x-3">
                                            <div class="relative">
                                                <img
                                                    class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                                    src="https://ui-avatars.com/api/?size=80&name={{ Auth::user()->username }}"
                                                    alt="">

                                                <span
                                                    class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                  <!-- Heroicon name: solid/chat-alt -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400"
                                         fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                    </svg>
                                </span>
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <div>
                                                    <div class="text-sm">
                                                        <a href="#"
                                                           class="font-medium text-gray-900">{{ Auth::user()->username }}</a>
                                                    </div>
                                                    <p class="mt-0.5 text-sm text-gray-500">
                                                        Inscription {{ Auth::user()->created_at->diffForHumans() }}
                                                    </p>
                                                </div>
                                                <div class="mt-2 text-sm text-gray-700">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>
                        <div class="mt-6">
                            <div class="flex space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="relative">
                                        <img
                                            class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                            src="https://ui-avatars.com/api/?size=80&name={{ Auth::user()->username }}"
                                            alt="">

                                        <span class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                              <!-- Heroicon name: solid/chat-alt -->
                              <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                   fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                      clip-rule="evenodd"/>
                              </svg>
                            </span>
                                    </div>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <form action="#">
                                        <div>
                                            <label for="comment" class="sr-only">Comment</label>
                                            <textarea id="comment" name="comment" rows="3"
                                                      class="shadow-sm block w-full focus:ring-gray-900 focus:border-gray-900 sm:text-sm border border-gray-300 rounded-md"
                                                      placeholder="Laisser un commentaire"></textarea>
                                        </div>
                                        <div class="mt-6 flex items-center justify-end space-x-4">
                                            <button type="button"
                                                    class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                                                <!-- Heroicon name: solid/check-circle -->
                                                <svg class="-ml-1 mr-2 h-5 w-5 text-green-500"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                          clip-rule="evenodd"/>
                                                </svg>
                                                <span>Soumettre la demande</span>
                                            </button>
                                            <button type="submit"
                                                    class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-gray-900 hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">
                                                Poursuivre
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <aside class="hidden xl:block xl:pl-8">
        <h2 class="sr-only">Details</h2>
        <div class="space-y-5">
            <div class="flex items-center space-x-2">
                <!-- Heroicon name: solid/lock-open -->
                <svg class="h-5 w-5 text-orange-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor" aria-hidden="true">
                    <path
                        d="M10 2a5 5 0 00-5 5v2a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2H7V7a3 3 0 015.905-.75 1 1 0 001.937-.5A5.002 5.002 0 0010 2z"/>
                </svg>
                <span class="text-orange-700 text-sm font-medium">En cours</span>
            </div>
            <div class="flex items-center space-x-2">
                <!-- Heroicon name: solid/chat-alt -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                          clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-900 text-sm font-medium">4 comments</span>
            </div>
            <div class="flex items-center space-x-2">
                <!-- Heroicon name: solid/calendar -->
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                          clip-rule="evenodd"/>
                </svg>
                <span class="text-gray-900 text-sm font-medium">Compte créé le <time
                        datetime="2020-12-02">{{ Auth::user()->created_at->format('d M Y') }}</time></span>
            </div>
        </div>

    </aside>
@endsection
