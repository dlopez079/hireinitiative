# Project Title

The H.I.R.E. Initiative is a movement established by Mr. Mark Papadimitriou. H.I.R.E. stands for "Honesty", "Integrity", "Respect", and "Equality". This website project will start as an informational piece. We will start with a Landing Page. With time, we will design a full website with multiple pages, authentication, full CRUD, and ecommerce.

## Getting Started

To get started, I will use Jetstream/Laravel, on Homestead, to create the base of the project. This will include the front end scaffolding with authentication. Homestead will provide the front and back end environment so I can get to work on the full stack.

### Prerequisites

Install Virtual Box.
Install Vagrant.
Clone Homestead respository.
Install Jetstream(Inertia) with Laravel.
Select Inertia which uses Vue.js as backend.

### Installing

Download the latest version of virtual box. Virtual box is a free virtualization product that will provide a virtual environment your project. This solution allows you to move away from using your physical computer as a platform and use a virtual environment in which you can manage.

Download Vagrant. Vagrant is a tool for building and managing virtual machine environments in a single workflow. With an easy-to-use workflow and focus on automation, Vagrant lowers development environment setup time, increases production parity, and makes the "works on my machine" excuse a relic of the past.

Since I used a windows machine for this project, I made sure that hardware virtualization(VT-x) in my BIOS.

I installed the Homestead Vagrant Box.

I cloned the Homestead respository to a main folder just above the projects folder as the Homestead box will serve as the host to all of me Laravel projects.

Onced I have closed the Homestead respository, I created the Homestead.yaml file. This file is where I will configure the project for the website. I created a folder for the project called "HireInitiative". I synced this project folder, which is on the physical machine, to the project folder that's located in the virtual machine. This allows me to modify specific files on both virtual machine and physical machine. I also set up the mysql database on the yaml file.

I use the Laravel installer to create the Laravel with Jetstream on the virtual project folder (Teams included). I can see the physical machine project folder populate with the laravel project files. I then build my NPM dependencies and migrate my database.

## Running the tests

Road not established yet.

### Break down into end to end tests

Road not established yet.

## Deployment

Road not established yet.

## Built With

-   [Jetstream](https://jetstream.laravel.com/1.x/introduction.html) - The web frontend framework used
-   [Laravel](https://laravel.com/) - Full Stack framework used.
-   [Database](https://www.mysql.com/) - Used for database.
-   [Homestead](https://laravel.com/docs/8.x/homestead) - Used to establish a virtual environment for me to work on.
-   [Vagrant](https://www.vagrantup.com/) - Used to manage and connect the virtual machine.
-   [Virtual Box](https://www.virtualbox.org/) - Used to generate RSS Feeds
-   [Laracasts](https://laracasts.com/) - Used as a reference along with documentation.

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Authors

-   **David Lopez** - _Initial work_ - [David Lopez](https://github.com/dlopez079)

```

```
