<template>
    <app-layout>
        <template #header>
            <div class = "p-6 sm:px-20 bg-white">
                <div class = "bg-white bg-opacity-25 grid-cols-2 grid md:grid-cols-1">
                    <div class = "flex items-center">
                        <!-- Trending Up Logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <div class = "ml-4 mt-4 text-3xl text-gray-700 leading-7">
                            Cost Estimation Risk Assessment Professional Edition
                        </div>
                    </div>
                </div>
                <div class = "mt-8 text-gray-500 text-lg">
                    CaseBound software is developed by agile methodologies with heavy emphasis on generating expected returns on investment. 
                    <br>
                    2 cost estimation procedures are followed which are equally important during software engineering and project management. 
                </div>
            </div>
            <div class = "container bg-white grid grid-cols-1 md:grid-cols-2">
                <div class = "p-6 bg-gray-100 ml-3 mr-5 mt-4 mb-4 rounded-xl">
                    <div class = "flex items-center">
                        <!-- Source Code Logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        <div class = "ml-4 text-lg text-gray-600 leading-7 font-semibold">
                            Cost Constructive Model 
                        </div>
                    </div>
                    <div class = "ml-12">
                        <div class = "mt-2 text-sm text-gray-500">
                            Calculates an initial cost estimate for the development project of software, products, or integrated systems. 
                        </div>
                        <div class = "mt-3 flex justify-end items-center text-sm font-semibold text-indigo-700">
                            <button class="bg-white text-blue-500 hover:bg-blue-500 hover:text-white border border-blue-500 rounded-lg px-4 py-2 mx-0 outline-none focus:shadow-outline">Cost Constructor</button>
                        </div>
                    </div>
                </div>
                <div class = "p-6 ml-5 mr-3 mt-4 mb-4 bg-gray-100 rounded-xl">
                    <div class = "flex items-center">
                        <!-- Source Code Logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        <div class = "ml-4 text-lg text-gray-600 leading-7 font-semibold">
                            Function Point Analysis
                        </div>
                    </div>
                    <div class = "ml-12">
                        <div class = "mt-2 text-sm text-gray-500">
                            Computes an estimate of the total number of function points required for the implementation of various components, modules or programs. 
                        </div>
                        <div class = "mt-3 flex justify-end text-sm font-semibold text-indigo-700">
                            <button class="bg-white text-blue-500 hover:bg-blue-500 hover:text-white border border-blue-500 rounded-lg px-4 py-2 mx-0 outline-none focus:shadow-outline">FPC Estimator</button>
                        </div>
                    </div>
                </div>
            </div>
        </template>
     </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
    }
</script>