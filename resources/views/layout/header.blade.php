<header class='bg-slate-200 shadow-md 2xl:hidden'>
        <div class='flex justify-between items-center max-w-6xl mx-auto p-3'>
            
            <h1 className='font-bold text-sm sm:text-xl3 flex flex-wrap hover:underline hover:cursor-pointer'>
                <a href="/home">
                <span class='text-slate-500'>Kriss</span>
                <span class='text-slate-700'>Dashboard</span>
                </a>
            </h1>
            

            <form action="" class='bg-slate-100 p-3 rounded-lg flex items-center'>
              <input type="text" placeholder='Search...' class='bg-transparent focus:outline-none w-24 sm:w-64'/>
              <button type='submit' class='text-slate-500'>
                <FaSearch/>
              </button>
            </form>

            <ul class='flex gap-4'>
              
              <li class='hidden sm:inline text-slate-700 hover:underline hover:cursor-pointer'><a href="/home">Home</a></li>
              
              <li class='hidden sm:inline text-slate-700 hover:underline hover:cursor-pointer'><a href="/dashboard">Dashboard</a></li>

              <li class='hidden sm:inline text-slate-700 hover:underline hover:cursor-pointer'><a href="/signin">Sign In</a></li>

            </ul>

        </div>
    </header>