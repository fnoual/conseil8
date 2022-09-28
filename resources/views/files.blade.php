@extends('layout.app')

@section('content')


    <div class="xl:col-span-3 xl:pr-8">
        <div>
            <h2 class="text-lg font-medium text-gray-900">
                Fichiers
            </h2>
            <p class="mt-1 text-sm text-gray-500">
                Vous voilà a la dernière étape pour finaliser votre demande d'adhésion au <strong>conseil de l'ordre régional</strong> , afin de procéder vous devez soumettre les documents ci-dessous .
            </p>
            <ul role="list" class="mt-6 border-t border-b border-gray-200 py-6 grid grid-cols-1 gap-6 sm:grid-cols-2">
                <li class="flow-root">
                    <div class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-pink-500">
                            <!-- Heroicon name: outline/view-list -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="{{ url('upload?document=extrait de naissance') }}" class="focus:outline-none">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Extrait de naissance<span aria-hidden="true"> &rarr;</span>
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">En cours de validité.</p>
                        </div>
                    </div>
                </li>

                <li class="flow-root">
                    <div class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-yellow-500">
                            <!-- Heroicon name: outline/calendar -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="{{ url('upload?document=diplôme') }}" class="focus:outline-none">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Diplômes<span aria-hidden="true"> &rarr;</span>
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Scan a envoyer et original a déposer auprès du bureau.</p>
                        </div>
                    </div>
                </li>

                <li class="flow-root">
                    <div class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-green-500">
                            <!-- Heroicon name: outline/photograph -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="{{ url('upload?document=casier judiciaire') }}" class="focus:outline-none">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Casier judiciaire<span aria-hidden="true"> &rarr;</span>
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">A demander auprès du tribunal.</p>
                        </div>
                    </div>
                </li>

                <li class="flow-root">
                    <div class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"  viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="{{ url('upload?document=nationalité') }}" class="focus:outline-none">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Certificat de nationalité<span aria-hidden="true"> &rarr;</span>
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Ou copie de la <abbr title="Carte Nationale d'Idenditée">C.N.I.</abbr> </p>
                        </div>
                    </div>
                </li>

                <li class="flow-root">
                    <div class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-indigo-500">
                            <!-- Heroicon name: outline/table -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="{{ url('upload?document=agrément') }}" class="focus:outline-none">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Agrément d'installation<span aria-hidden="true"> &rarr;</span>
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Pour les privés.</p>
                        </div>
                    </div>
                </li>

                <li class="flow-root">
                    <div class="relative -m-2 p-2 flex items-center space-x-4 rounded-xl hover:bg-gray-50 focus-within:ring-2 focus-within:ring-indigo-500">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-lg bg-purple-500">
                            <!-- Heroicon name: outline/clock -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="{{ url('upload?document=attestation de travail') }}" class="focus:outline-none">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    Attestation de travail<span aria-hidden="true"> &rarr;</span>
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Pour le secteur public.</p>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="mt-4 flex">
                <a href="{{ url('upload?document=diplôme') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Vous pouvez aussi envoyer ces documents via la poste ou les déposer directement au bureau.<span aria-hidden="true"> &rarr;</span></a>
            </div>
        </div>
    </div>

@endsection
