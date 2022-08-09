<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Regit Test</title>

        <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
        <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>

    </head>
    <body class="antialiased bg-black">

        <div id="app">

            <section class="container flex justify-center" >
                <div class="w-1/2 xl:w-1/5">

                    <h1 class="text-center text-3xl font-bold mt-10 xl:mt-24 text-orange-500">N.A.S.A Search</h1>

                    <div class="flex flex-col mt-3">

                        <span class="w-full relative"> 
                            <input type="text" v-model="queryString" name="query" class="border bg-white pl-3 pr-10 py-2 w-full">
                            <img @click="search" class="w-6 cursor-pointer absolute top-1/2 transform -translate-y-1/2 right-2 hover:scale-105" src="/images/magnifying-glass.svg">
                        </span>
                        <span v-if="validation.queryInput" class="error text-red-500">This field is required</span>

                        <div class="flex justify-around mt-3">
                            <fieldset class="flex items-center">
                                <input type="checkbox" name="images" v-model="checkboxImages" @change="updateCheckboxes" id="checkbox-images">
                                <label for="checkbox-images" class="ml-2 font-bold text-white text-xl hover:text-orange-500">Images</label>
                            </fieldset>
                            <fieldset class="flex items-center">
                                <input type="checkbox" name="audio" v-model="checkboxAudio" @change="updateCheckboxes" id="checkbox-audio">
                                <label for="checkbox-audio" class="ml-1 font-bold text-white text-xl hover:text-orange-500">Audio</label>
                            </fieldset>
                        </div>
                        <span v-if="validation.checkBoxes" class="error text-red-500">At least one checkbox must be selected</span>

                    </div>
                </div>
            </section>

            <section class="container my-10">
                
                <div v-if="searchInit && results.length === 0" class="text-red-500 text-center text-3xl">No results found</div>

                <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 xl:px-64">
                    
                    <div  v-if="results.length > 0" v-for="result in results" class="bg-white overflow-hidden h-36">

                        <a v-if="result.data[0].media_type === 'image'" :href="result.data[0].nasa_id" class="block transition h-full w-full hover:scale-110">
                            <img class="bg-cover w-full" :src="result.links[0].href">
                        </a>
                        <a v-else-if="result.data[0].media_type === 'audio'" :href="result.data[0].nasa_id" class="flex transition justify-center items-center h-full w-full hover:scale-110">
                            <img class="w-12" src="/images/podcast-live-icon.svg">
                        </a>
                    </div>

                </div>
            </section>

        </div>


    </body>
</html>
<?php /**PATH /var/www/public/local.regit.com/resources/views/welcome.blade.php ENDPATH**/ ?>