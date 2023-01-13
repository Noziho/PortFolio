export function Project (name, thumbnail, prodLink, gitHubLink) {

    this.name = name;
    this.thumbnail = thumbnail;
    this.prodLink = prodLink;
    this.gitHubLink = gitHubLink;
    this.containerProjects = document.querySelector('.projectContainer');


    this.setProject = function () {
        let containerProject = document.createElement("div");
        containerProject.setAttribute('data-aos', 'fade-up');
        containerProject.classList = "project padding-2 margin-inline-2 margin-top-4";


        let projectNameContainer = document.createElement("div");

        let projectName = document.createElement("h1");
        projectName.innerHTML = this.name;
        projectName.classList = "projectTitle"

        let projectThumbnailContainer = document.createElement("div");
        projectThumbnailContainer.classList = "thumbnailContainer  margin-top-1";

        let projectThumbnail = document.createElement("img");
        projectThumbnail.src = this.thumbnail;
        projectThumbnail.alt = "Project Image";
        projectThumbnail.classList = "projectThumbnail";



        let projectProdLinkContainer = document.createElement("div");
        projectProdLinkContainer.classList = "margin-top-2";

        let projectProdLink = document.createElement("a");
        projectProdLink.innerHTML = "Lien de production"
        projectProdLink.href = this.prodLink;
        projectProdLink.add



        let projectGitHubLinkContainer = document.createElement("div");
        projectGitHubLinkContainer.classList = "margin-top-2";

        let projectGitHubLink = document.createElement("a");
        projectGitHubLink.innerHTML = "GitHub link";
        projectGitHubLink.href = this.gitHubLink;



        projectNameContainer.append(projectName);
        projectThumbnailContainer.append(projectThumbnail);
        projectProdLinkContainer.append(projectProdLink);
        projectGitHubLinkContainer.append(projectGitHubLink);

        containerProject.append(
            projectNameContainer, projectThumbnailContainer, projectProdLinkContainer, projectGitHubLinkContainer
        );

        this.containerProjects.append(containerProject);

    }
}