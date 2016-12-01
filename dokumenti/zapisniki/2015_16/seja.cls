\NeedsTeXFormat{LaTeX2e}
\ProvidesClass{seja}[2016/04/19 Template za seje]

\LoadClass[a4paper,oneside,12pt]{article}

\RequirePackage[slovene]{babel}    % slovenian language and hyphenation
\RequirePackage[utf8]{inputenc}    % make čšž work on input
\RequirePackage[T1]{fontenc}       % make čšž work on output
\RequirePackage[reqno]{amsmath}    % basic ams math environments and symbols
\RequirePackage{amssymb,amsthm}    % ams symbols and theorems
\RequirePackage{url}               % \url and \href for links
\RequirePackage{icomma}            % make comma a thousands separator with correct spacing
\RequirePackage{graphicx}          % slike
\RequirePackage{enumitem}          % seznami


\RequirePackage[bookmarks, colorlinks=true, linkcolor=black, anchorcolor=black,
  citecolor=black, filecolor=black, menucolor=black, runcolor=black,
  urlcolor=black, pdfencoding=unicode]{hyperref}  % clickable references, pdf toc
\RequirePackage[
  paper=a4paper,
  top=2.5cm,
  bottom=2.5cm,
  left=2.5cm,
  right=2.5cm
% textheight=24cm,
% textwidtht=16cm,
]{geometry}  % page geomerty

% \pagestyle{empty}              % vse strani prazne
\setlength{\parindent}{0pt}    % zamik vsakega odstavka
\setlength{\parskip}{10pt}     % prazen prostor po odstavku
\setlength{\overfullrule}{30pt}  % oznaci predlogo vrstico z veliko črnine


% greek letters
\let\oldphi\phi
\let\oldtheta\theta
\newcommand{\eps}{\varepsilon}
\renewcommand{\psi}{\varpsi}
\renewcommand{\theta}{\vartheta}

% lists with less vertical space
\newenvironment{itemize*}{\vspace{-1.5\parskip}\begin{itemize}\setlength{\itemsep}{0pt}\setlength{\parskip}{2pt}}{\end{itemize}\vspace{-1\parskip}}
\newenvironment{enumerate*}{\vspace{-1.5\parskip}\begin{enumerate}\setlength{\itemsep}{0pt}\setlength{\parskip}{2pt}}{\end{enumerate}\vspace{-1\parskip}}
\newenvironment{description*}{\vspace{-6pt}\begin{description}\setlength{\itemsep}{0pt}\setlength{\parskip}{2pt}}{\end{description}\vspace{-1\parskip}}

\newcounter{sklep}
\newenvironment{sklep}{
  \par
  \refstepcounter{sklep}
  \textbf{Sklep \arabic{sklep}.}%
}{
  \par \vspace{-0.5\parskip}
}
\newenvironment{sklep*}{\begin{sklep}}{\end{sklep} Sklep soglasno sprejet.}

\newenvironment{red}{
\textbf{Dnevni red:}
\begin{enumerate*}
}{
\end{enumerate*}
}

\newenvironment{red*}{
\begin{red}
}{
\item Razno
\end{red}
Dnevni red soglasno potrjen.
}

\newenvironment{ad}{
\begin{enumerate}[label=\textbf{Ad.~\arabic*.},leftmargin=*,labelindent=0pt]
}{
\end{enumerate}
}

% na zacetku
\AtBeginDocument{
\hypersetup{pdftitle={\Title}}  % setup pdf metadata
\begin{minipage}[t]{0.7\linewidth}
Študentski svet Fakultete za matematiko in fiziko \\
Jadranska 19 \\
1000 Ljubljana \\

Ljubljana, \DateZapisnik
\end{minipage}%
\begin{minipage}[t]{0.3\linewidth}
  \mbox{} \\[-15pt]
  \hspace*{\fill} \includegraphics[width=0.9\linewidth]{logo.png}
\end{minipage}
\begin{center}
  \bfseries\large
  \Title \\
  v študijskem letu 2015/16, \DateSeja
\end{center}
}

% na koncu
\AtEndDocument{

Zapisal Rok Gregorič, pregledala Marion van Midden.

\begin{flushright}
  Predsednica ŠS FMF \\
  Marion van Midden
\end{flushright}
}
% vim: set ft=tex: