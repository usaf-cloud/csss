<form class="w-full">

    @csrf

    <div class="block">

        <!-- Name -->
        <div class="flex flex-wrap -mx-3 mb-6">
        
            <!-- First Name -->
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    First Name
                </label>
                
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="first_name" placeholder="Jane">
    
            </div>
    
            <!-- Last Name -->
            <div class="w-full md:w-1/2 px-3">
            
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Last Name
                </label>
    
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="last_name" placeholder="Doe">
    
            </div>
    
        </div>
        
        <!-- Email -->
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Email
                </label>
                
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="email" name="email" placeholder="jane.doe@us.af.mil">
    
            </div>
        </div>
    
        <!-- AF Info -->
        <div class="flex flex-wrap -mx-3 mb-2">
            
            <!-- MAJCOM -->
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                    MAJCOM
                </label>
                
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Air Education and Training">

            </div>
    
            <!-- Sqaudron -->
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Squadron
                </label>
    
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="12th Training Squadron">
                
            </div>
            
        </div>

    </div>

    <!-- Submit -->
    <div class="mt-8">
        <button type="submit" class="uppercase font-bold font-display bg-indigo-500
        tracking-wide border-4 border-indigo-500 text-white py-3 px-4
        rounded-lg">Subscribe</button>
    </div>

</form>