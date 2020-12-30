# Introduction
This repo is an attempt to create a working codebase so translations can smoothly find their way into ATK.

Here's a rough roadmap for the code regarding translations:

1. Tackle any issues preventing translation from working
2. Pass all translatable strings through the `_()` function
3. Start translating for good

This repo is mainly for working on the first stage. We could also keep it for points 2 and 3 or we may prefer to push directly to the originating projects once things get going.

# Submodules warning
Please note that in order to be able to include the original GitHub projects and being able to push-pull easily, this repo uses Git Submodules. If you want to work with this repo, note that submodules need some special handling. Here's a video that covers pretty much all of it in a simple way: https://www.youtube.com/watch?v=ZYq3NJnO08U

All submodules (currently `Atk4\Ui` and `Atk4\Login`) are located within the `atk4` directory under the repo's root. The ATK UI and Login directories located under `vendor` are in fact symlinks pointing to the aforementioned directories.

# Installing
1. Fork and clone the repo
2. Pull the submodules (watching the video should give you a guideline)
3. Run `composer update` to download dependencies in vendor folder and setup autoloading

If anyone wants to post a PR outlining the installation process in more detail, feel free to do so. Submodule behavior should also be taking into account when contributing.