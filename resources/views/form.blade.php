@extends('layout.app')

@section('content')


    <div class="xl:col-span-3 xl:pr-8 xl:border-r xl:border-gray-200">
            <form class="space-y-8 divide-y divide-gray-200">
                <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                    <div>
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Informations
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Complétez les informations de votre compte
                            </p>
                        </div>

                        <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Adresse e-mail
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="email" readonly name="email" id="email" autocomplete="email" value="{{ Auth::user()->email }}"
                                           class="max-w-lg block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="bg-white shadow sm:rounded-lg">
                                <div class="px-4 py-5 sm:p-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="renew-subscription-label">
                                        Recevoir les mises a jour
                                    </h3>
                                    <div class="mt-2 sm:flex sm:items-start sm:justify-between">
                                        <div class="max-w-xl text-sm text-gray-500">
                                            <p id="renew-subscription-description">
                                                En cochant cette case vous receverez une newsletter hebdomadaire sur l'actualité récent du conseil de l'ordre, événements a venir etc ...
                                            </p>
                                        </div>
                                        <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
                                            <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                                            <button type="button" class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" role="switch" aria-checked="false" aria-labelledby="renew-subscription-label" aria-describedby="renew-subscription-description">
                                                <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                                <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">--}}
                            {{--                        <label for="photo" class="block text-sm font-medium text-gray-700">--}}
                            {{--                            Photo--}}
                            {{--                        </label>--}}
                            {{--                        <div class="mt-1 sm:mt-0 sm:col-span-2">--}}
                            {{--                            <div class="flex items-center">--}}
                            {{--              <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">--}}
                            {{--                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">--}}
                            {{--                  <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />--}}
                            {{--                </svg>--}}
                            {{--              </span>--}}
                            {{--                                <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">--}}
                            {{--                                    Changer--}}
                            {{--                                </button>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                    </div>--}}

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="cover-photo"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Photo d'identité
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <div
                                        class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                 fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload"
                                                       class="relative cursor-pointer bg-white rounded-md font-medium text-emerald-600 hover:text-emerald-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-emerald-500">
                                                    <span>Choisir un fichier</span>
                                                    <input id="file-upload" name="file-upload" type="file"
                                                           class="sr-only">
                                                </label>
                                                <p class="pl-1">ou glisser-déposer</p>
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG, GIF jusqu'a 10MB
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Informations personelles
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Certaines informations peuvent être affichées publiquement, faites attention à ce que
                                vous partagez. (voir déclaration de confidentialité)
                            </p>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="first-name"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Nom
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                           class="max-w-lg block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Prénom(s)
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                           class="max-w-lg block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>


                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Wilaya de naissance
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <select id="country" name="country" autocomplete="country"
                                            class="max-w-lg block focus:ring-emerald-500 focus:border-emerald-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        <option>Alger</option>
                                        <option>Biskra</option>
                                        <option>Oran</option>
                                    </select>
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="genre" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Sexe
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <select id="genre" name="genre" autocomplete="genre"
                                            class="max-w-lg block focus:ring-emerald-500 focus:border-emerald-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        <option>Masculin</option>
                                        <option>Féminin</option>
                                    </select>
                                </div>
                            </div>
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="date_naissance"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Date de naissance
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="date" value="{{ now()->subYears(28)->format('Y-m-d') }}"
                                           max="{{ now()->format('Y-m-d') }}" name="date_naissance" id="date_naissance"
                                           class="max-w-lg block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline sm:border-t sm:border-gray-200 sm:pt-5">
                                <div>
                                    <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                         id="label-notifications">
                                        Situation de famille
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="max-w-lg">
                                        {{--                                        <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>--}}
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-center">
                                                <input id="push-everything" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-everything"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Célibataire
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push-email" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-email"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Marié
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push-nothing" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-nothing"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Veuf
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push-nothing" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-nothing"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Divorcé
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="nom_conjoint"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Nom et prénom(s) du conjoint
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="nom_conjoint" id="nom_conjoint" autocomplete="nom_conjoint"
                                           class="block max-w-lg w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="profession_conjoint"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Profession du conjoint
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="profession_conjoint" id="profession_conjoint"
                                           class="max-w-lg block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="enfants" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Nombre d'enfants
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="number" name="enfants" id="enfants"
                                           class="max-w-lg block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">

                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="charge" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Nombre de personnes a charge
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="charge" id="charge" autocomplete="charge"
                                           class="max-w-lg block w-full shadow-sm focus:ring-emerald-500 focus:border-emerald-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="nationalite"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Nationalité
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <select id="nationalite" name="nationalite" autocomplete="nationalite"
                                            class="max-w-lg block focus:ring-emerald-500 focus:border-emerald-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        <option>Algérienne</option>
                                        <option>Autre</option>
                                    </select>
                                </div>
                            </div>
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="nationalite_type"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Acquise par
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <select id="nationalite_type" name="nationalite_type"
                                            autocomplete="nationalite_type"
                                            class="max-w-lg block focus:ring-emerald-500 focus:border-emerald-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        <option>Filiation</option>
                                        <option>Autre</option>
                                    </select>
                                    <p class="mt-2 text-sm text-gray-500">Filiation signifie que vous avez obtenu votre
                                        nationalité par votre relation a vos parents.</p>

                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline sm:border-t sm:border-gray-200 sm:pt-5">
                                <div>
                                    <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                         id="label-notifications">
                                        Service militaire
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="max-w-lg">
                                        {{--                                        <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>--}}
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-center">
                                                <input id="push-everything" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-everything"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Oui
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push-email" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-email"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Non
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push-nothing" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-nothing"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Sursitaire
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push-nothing" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-nothing"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Ajourné
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push-nothing" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-nothing"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Non concerné
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push-nothing" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-nothing"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Réformé
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="push-nothing" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-nothing"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Exempté
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-baseline sm:border-t sm:border-gray-200 sm:pt-5">
                                <div>
                                    <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                         id="label-notifications">
                                        Avez-vous été médecin d'active ?
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <div class="max-w-lg">
                                        {{--                                        <p class="text-sm text-gray-500">These are delivered via SMS to your mobile phone.</p>--}}
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-center">
                                                <input id="push-everything" name="push-notifications" type="radio"
                                                       class="focus:ring-emerald-500 h-4 w-4 text-emerald-600 border-gray-300">
                                                <label for="push-everything"
                                                       class="ml-3 block text-sm font-medium text-gray-700">
                                                    Non
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="reset"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                            Réinitialiser
                        </button>
                        <button type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                            Sauvgarder
                        </button>
                    </div>
                </div>
            </form>
    </div>
    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
    <script>
        document.querySelectorAll('[role="switch"]').forEach(function (el){
            el.addEventListener('click',function (el){
                this.classList.remove('bg-gray-200');
                this.classList.add('bg-emerald-500');
                this.firstChild.classList.remove('translate-x-0')
                this.firstChild.classList.add('translate-x-5')

            })
        });
    </script>
@endsection
